<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::paginate(10);
        return view('symptoms.symptoms', ['symptoms' => $symptoms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('symptoms.addSymptoms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'symptoms_code' => 'required|size:3|unique:symptoms,symptoms_code',
            'symptom' => 'required'
        ]);

        Symptom::create($request->all());   
        return redirect()->route('symptoms')->with('status','Symptom Data has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Symptom $symptom)
    {
        return view('symptoms.editSymptoms', compact('symptom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Symptom $symptom)
    {

        $request->validate([
            'symptoms_code' => ['required','size:3',Rule::unique('symptoms','symptoms_code')->ignore($symptom)],
            'symptom' => 'required'
        ]);
        $symptom->update($request->all());   
        return redirect()->route('symptoms')->with('status','Symptom Data has been Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptom $symptom)
    {
        $symptom->delete();
        return redirect()->route('symptoms')->with('status','Symptoms Data has been Deleted');
    }
    // public function delete($symptoms_code){
    //     $symptom = Symptom::find($symptoms_code);
    //     $symptom->delete($symptom);
    //     return redirect('/symptoms')->with('status','Symptoms Data has been Deleted');
    // }
}
