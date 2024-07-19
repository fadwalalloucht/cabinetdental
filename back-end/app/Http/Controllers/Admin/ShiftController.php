<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Shift;

class ShiftController extends Controller
{
    //
    public function showHoraiare()
    {
        return view('admin.addHoraire');
    }

    /**add shif */
    public function addShift(Request $request)
    {
        // Validate the form data
        $request->validate([
            'firstday' => 'required|string',
            'lastday' => 'required|string',
            'openhour' => 'required|string',
            'closehour' => 'required|string',
            'samedi' => 'required|string',
            'sopenhour' => 'required|string',
            'sclosehour' => 'required|string',
            'phone' => 'required|string',
        ]);
    
        // Create a new shift
        $shift = new Shift();
        $shift->firstday = $request->input('firstday');
        $shift->lastday = $request->input('lastday');
        $shift->openhour = $request->input('openhour');
        $shift->closehour = $request->input('closehour');
        $shift->samedi = $request->input('samedi');
        $shift->sopenhour = $request->input('sopenhour');
        $shift->sclosehour = $request->input('sclosehour');
        $shift->phone = $request->input('phone');
        $shift->save();
    
        Session::flash('statuscode', 'success');
        return redirect('/allshifts')->with('status', 'Votre horaire de travail a été enregistré avec succès'); // Redirect to list service route or view
    }
    

    /** list des shift */
    public function allShift(){
        $shifts = Shift::all();
        return view('admin.listHoraire')->with('shifts', $shifts);
    }


    /**edit shift */
    public function editShift(Request $request, $id){
        $shift = Shift::findOrFail($id);
        return view('admin.updateHorarie')->with('shift', $shift);
    }

    /** update shift */

    public function updateShift(Request $request , $id){
        // Validate the form data
        $request->validate([
            'firstday' => 'required|string',
            'lastday' => 'required|string',
            'openhour' => 'required|string',
            'closehour' => 'required|string',
            'samedi' => 'required|string',
            'sopenhour' => 'required|string',
            'sclosehour' => 'required|string',
            'phone' => 'required|string',

        ]);

        // find a shift 
        $shift = Shift::find($id);

        // update a shift
        $shift = new Shift();
        $shift->firstday = $request->input('firstday');
        $shift->firstday = $request->input('lastday');
        $shift->firstday = $request->input('openhour');
        $shift->firstday = $request->input('closehour');
        $shift->firstday = $request->input('samedi');
        $shift->firstday = $request->input('sopenhour');
        $shift->firstday = $request->input('sclosehour');
        $shift->firstday = $request->input('phone');
        $shift->update();
        Session::flash('statuscode', 'success');
        return redirect('/allshifts')->with('status', ' Votre horaire de travaile a été enregistrer avec succès'); // Redirect to list service route or view

    }



    /** delete shift */
    public function deleteShift($id){
        $shift = shift::findOrFail($id);
        $shift->delete();
        Session::flash('statuscode', 'error');
        return redirect('/allshifts')->with('status',' Votre shift a été supprimer avec succès');
    }
    

}
