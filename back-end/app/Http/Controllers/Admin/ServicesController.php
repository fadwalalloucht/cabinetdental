<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicesController extends Controller
{
    //

    public function showAddServiceForm()
    {
        return view('admin.addService');
    }

    public function addService(Request $request)
    {

        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create a new service
        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->image = $imageName;
        $service->save();
        Session::flash('success', 'Service ajouté avec succès');
        Session::flash('statuscode', 'success');
        return redirect('/liste-Service')->with('status',' Votre service a été enregistrer avec succès');// Redirect to list service route or view


    }

    public function listService()
    {
        $services = Service::all();
        return view('admin.listService')->with('services', $services);
    }

    public function editService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.editService')->with('service', $service);

    }

    public function updateService(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // image is optional for update
        ]);

        // Find the service by ID
        $service = Service::find($id);

        // Update service details
        $service->name = $request->input('name');
        $service->description = $request->input('description');

        // Handle image update if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if necessary (optional step depending on your requirements)

            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $service->image = $imageName;
        }

        // Save the updated service
        $service->update();

        // Redirect or return a response as needed
        Session::flash('statuscode', 'info');
        return redirect('/liste-Service')->with('status',' Votre service a été mis à jour avec succès');// Redirect to list service route or view
    }


    public function deleteservice($id){
        $service = Service::findOrFail($id);
        $service->delete();
        Session::flash('statuscode', 'error');
        return redirect('/liste-Service')->with('status',' Votre service a été supprimer avec succès');

    }

}
