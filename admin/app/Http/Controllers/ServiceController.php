<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        \Log::info('Request Data:', $services->all());

        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('addService');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Service::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        // Alert::success('Success', 'Service created successfully.');
        // \Log::info('Request Data:', $request->all());

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('showService', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('editService', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $service->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imageName,
            ]);
        } else {
            $service->update($request->only(['nom', 'description']));
        }

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
