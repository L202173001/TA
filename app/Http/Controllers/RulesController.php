<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Trouble;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubles = Trouble::paginate(10);

        return view('rule.rule', ['troubles'=>$troubles]);
    }

    public function detail($trouble)
    {
        $rules = Rule::where('troubles_code',$trouble)->get();
        $trouble = Trouble::where('troubles_code',$trouble)->first();

        return view('rule.rule-detail', ['rules'=>$rules, 'troubles_code'=>$trouble, 'trouble'=> $trouble]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trouble)
    {
        $trouble = Trouble::where('troubles_code',$trouble)->first();
        // dd($trouble);
        $symptoms = Symptom::get();
        return view('rule.rule-add', ['symptoms'=>$symptoms, 'trbl'=>$trouble]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $trouble)
    {
        $request->validate([
            'troubles_code' => 'required|exists:troubles,troubles_code',
            'symptoms_code' => 'required|exists:symptoms,symptoms_code',
        ]);

        $check = Rule::where([
            'troubles_code' => $request->troubles_code,
            'symptoms_code' => $request->symptoms_code
        ])->get();

        // if rule alredy exists
        if(!$check->isEmpty()) {
            return redirect()->back()->with('error','The rules already exist');
        }

        // dd($request->all());

        Rule::create([
            'symptoms_code'=> $request->symptoms_code,
            'troubles_code'=> $request->troubles_code
        ]);
        
        return redirect()->route('rule.detail',['trouble'=>$trouble])->with('status','Rule has been Added');
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
    public function edit($id)
    {
        $symptoms = Symptom::get();
        $rule = Rule::where('id',$id)->first();

        return view('rule.rule-edit', ['rule'=>$rule, 'symptoms'=>$symptoms]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'troubles_code' => 'required|exists:troubles,troubles_code',
            'symptoms_code' => 'required|exists:symptoms,symptoms_code',
        ]);

        Rule::where('id', $id)->update([
            'troubles_code'=>$request->troubles_code,
            'symptoms_code'=>$request->symptoms_code
        ]);

        return redirect()->route('rule.detail',['trouble'=>$request->troubles_code])->with('status','Rule Data has been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trouble, Rule $rule)
    {
        $rule->delete();
        return redirect()->route('rule.detail',['trouble'=>$trouble])->with('status','Rule Data has been Delleted');
    }
}
