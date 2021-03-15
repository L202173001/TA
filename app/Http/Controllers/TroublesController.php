<?php

namespace App\Http\Controllers;

use App\Models\Trouble;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TroublesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubles = Trouble::paginate(5);
        return view('trouble.trouble', ['troubles' => $troubles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trouble.addTrouble');
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
            'troubles_code' => 'required|size:3|unique:troubles,troubles_code',
            'trouble' => 'required',
            'solution' => 'required'
        ]);

        Trouble::create($request->all());   
        return redirect()->route('trouble')->with('status','Trouble Data has been Added');
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
    public function edit(Trouble $trouble)
    {
        return view('trouble.editTroubles', compact('trouble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trouble $trouble)
    {
        $request->validate([
            'troubles_code' => ['required','size:3',Rule::unique('troubles','troubles_code')->ignore($trouble)],
            'trouble' => 'required'
        ]);

        $trouble->update($request->all());   
        return redirect()->route('trouble')->with('status','Trouble Data has been Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trouble $trouble)
    {
        $trouble->delete();
        return redirect()->route('trouble')->with('status','Troubles Data has been Deleted');
    }
}
