<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Paginaton\Paginator;


class PatientController extends Controller
{

    public function trashed()
    {
        // $data=Patient::paginate(10);
        $data=Patient::onlyTrashed()->paginate(10);
        return view('template.trash',compact('data'));
    }
    public function recover($id)
    {
        $data=Patient::withTrashed()->findOrFail($id);
        $data->restore();
       
        return redirect()->route('thala.trashed');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Patient::paginate(10);
        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {

        $validator = $request->validate([
            'name'=>'required | max:30 |alpha',
            'mobile'=>'required |numeric |min:12',
            'gender'=>'required',
            'gmail'=>'required |email',
            'address'=>'required',
            'reference'=>'required  |alpha'

        ]);
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->mobile = $request->mobile;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->reference = $request->reference;
        $patient->gmail = $request->gmail;
        $patient->save();
        return redirect()->route('thala.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient,$id)
    {
       
        $patient =Patient::find($id);
        $med= $patient->getMedicine;
        return view('user.show',compact('patient','med'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient,$id)
    {
        $patient =Patient::find($id);
        return view('user.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id, Patient $patient)
    {
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->mobile = $request->mobile;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->reference = $request->reference;
        $patient->gmail = $request->gmail;
        $patient->save();
        return redirect()->route('thala.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient,$id)
    {  
        $patient=Patient::find($id);
        $patient->delete();
        return redirect()->route('thala.index');
    }

    public function permanentDelete($id)
    {
        $patient=Patient::withTrashed()->findOrFail($id);
        $patient->forceDelete();
        return redirect()->route('thala.trashed')->with('success','Data deleted permanently');
    }
}
