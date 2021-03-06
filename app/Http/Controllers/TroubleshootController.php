<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Trouble;
use App\Models\Vrule;
use App\Models\Result;
use App\Models\SymptomHistory;

class TroubleshootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Symptom
        $symptoms = Symptom::get();

        return view('troubleshoot.troubleshoot', ["symptoms"=>$symptoms]);
    }


    public function getRule()
    {
        // Function ini digunakan untuk mengambil rule dari database
        $vrules = Vrule::get()->toArray();
        
        $count = count($vrules);
        
        for ($i=0; $i < $count; $i++) { 
            $vrules[$i]['symptoms_code'] = explode('|', $vrules[$i]['symptoms_code']);
        }

        return $vrules;
    }

    public function filterUserInput($data)
    {
     
        // Function ini digunakan untuk mengambil gejala yang di inputkan oleh user saja.
        $requests = $data;
        $result = array();
        foreach ($requests as $key => $request) {
            if (!in_array($key, array('_token','name','phone','submit')) ) {
                if ($request !== "No") {
                    array_push($result, $key);
                }
            }
        }

        return $result;
    }

    public function showResult($data, $result_id)
    {
        // Fungsi ini digunakan untuk menampilkan hasil diagnosa
        if($data['status'] == False) {
            $symptoms = SymptomHistory::where("result_id", $result_id) -> get();
            return view('troubleshoot.troubleshootResult', [
                "status"=>False,
                "name"=> $data['name'],
                "phone"=> $data['phone'],
                "symptoms" => $symptoms
            ]);
        } else {
            $diagnosis = Trouble::where("troubles_code",$data['troubles_code'])->first();
            if($diagnosis) {
              $symptoms = SymptomHistory::where("result_id", $result_id) -> get();
              return view('troubleshoot.troubleshootResult', [
                  "status" => True,
                  "name"=> $data['name'],
                  "phone"=> $data['phone'],
                  "trouble"=>$diagnosis,
                  "symptoms" => $symptoms
              ]);
            } 
            // else {
            //   $symptoms = SymptomHistory::where("result_id", $result_id) -> get();
            //   return view('troubleshoot.troubleshootResult', [
            //       "status"=>False,
            //       "name"=> $data['name'],
            //       "phone"=> $data['phone'],
            //       "symptoms" => $symptoms
            //   ]);
            // }
        }

    }

    public function predict(Request $request)
    {
        
        // Validasi input nama dan nomor telepon,
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        // ]);
        
        // Get Rule to Array
        $rules = $this->getRule();
        // dd($rules);
        // exit;

        // Remove _token and No Value from user input.
        $input = $this->filterUserInput($request->all());


        // dd($rules);
        // dd($input);
        // exit;

        // Result Variable
        $result = array(
            "status"=>False,
            "name"=>$request->name,
            "phone"=>$request->phone
        );

        // Simple Forward Chaining
        foreach($rules as $rule) {
            if($input === array_intersect($input, $rule['symptoms_code']) && $rule['symptoms_code'] === array_intersect($rule['symptoms_code'], $input)) {
                $result = array(
                    "status"=>True,
                    "troubles_code"=>$rule['troubles_code'],
                    "name"=>$request->name,
                    "phone"=>$request->phone
                );

                $data = array(
                  "name" => $request -> name,
                  "phone_number" => $request -> phone,
                  "troubles_code" => $rule['troubles_code'],
                  "status" => 'True'
                );
                //create result
                $resultCreate = Result::create($data);
                $result_id = $resultCreate -> id;

           
                foreach($input as $item) {
                  $data = array(
                    "result_id" => $result_id,
                    "symptoms_code" => $item,
                  );
                  $historyCreate = SymptomHistory::create($data);
                }
                return $this->showResult($result, $result_id);
                exit;
            }
        }

        $data = array(
          "name" => $request -> name,
          "phone_number" => $request -> phone,
          "status" => 'False'
        );
        //create result
        $resultCreate = Result::create($data);
        $result_id = $resultCreate -> id;
        foreach($input as $item) {
          $data = array(
            "result_id" => $result_id,
            "symptoms_code" => $item,
          );
          $historyCreate = SymptomHistory::create($data);
        }
        return $this->showResult($result, $result_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
