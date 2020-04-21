<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\RDV;
Use App\Patient;
class RdvController extends Controller
{
    public function index(Request $request)
    {
        $rdvs = RDV::orderBy('created_at', 'desc')->get();
        $patients = Patient::orderBy('created_at', 'desc')->get();
        

        return view('rdv', [
            'patients' => $patients,
            'rdvs' => $rdvs
        ]);
    }

    
    public function store(Request $request)
    {
        $check = $request->input('check');
        echo $check;

        if ( ! $request->has('check')) {
            $this->validate($request, [
                'object' => 'required|max:255',
                'date' => 'required',
                'time' => 'required',
            ]);
           
            $rdv = new RDV;
            $rdv->object = $request->object;
            $rdv->date = $request->date;
            $rdv->time = $request->time;
            $rdv->patient()->associate($request->id_patient);
            $rdv->save();
         }
        else{
            $this->validate($request, [
                'object' => 'required|max:255',
                'date' => 'required',
                'time' => 'required',
                'name' => 'required|max:255',
                'firstName' => 'required|max:255',
                'number' => 'required|max:255',
                'adresse' => 'required',
            ]);
           
            $patient = new Patient();
            $patient->name = $request->name;
            $patient->firstName = $request->firstName;
            $patient->mail = $request->mail;
            $patient->adresse = $request->adresse;
            $patient->number = $request->number;
            $patient->save();
            
            $rdv = new RDV;
            $rdv->object = $request->object;
            $rdv->date = $request->date;
            $rdv->time = $request->time;
            $rdv->patient()->associate($patient->id);
            $rdv->save();
        
           
         }
        return redirect('/');
    }
    public function destroy(Request $request, $id)
    {
        RDV::findOrFail($id)->delete();
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
           
        ]);

        $rdv = RDV::find($id);
        $rdv->date = $request->date;
        $rdv->time = $request->time;
        $rdv->save();
        

        return redirect('/');

    }



}
