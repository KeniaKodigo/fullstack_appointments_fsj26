<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = 10;
        //Patient::all()
        $patients = Patient::paginate(5); //[]
        //return view('patients.patients', array('items' => $patients));
        return view('patients.patients', compact('patients','count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        //Validator
        Patient::create($request->all()); //insert into
        return redirect()->route('patients.index')->with('success', 'Paciente registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {   
        //$patient = Patient::find($id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success', 'Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
    }
}
