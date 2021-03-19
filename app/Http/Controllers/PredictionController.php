<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Trouble;
use App\Models\Vrule;
use App\Models\Enduser;
use App\Models\Result;
use App\Models\SymptomHistory;

class PredictionController extends Controller
{
    //
    public function index()
    {
        // Get Symptom
        $symptoms = Symptom::get();

        return view('devs.prediction', ["symptoms"=>$symptoms]);
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

    public function showResult($data, $enduser_id)
    {
        // Fungsi ini digunakan untuk menampilkan hasil diagnosa
        if($data['status'] == False) {
            $symptoms = SymptomHistory::where("enduser_id", $enduser_id) -> get();
            return view('devs.result', [
                "status"=>False,
                "name"=> $data['name'],
                "phone"=> $data['phone'],
                "symptoms" => $symptoms
            ]);
        } else {
            $diagnosis = Trouble::where("troubles_code",$data['troubles_code'])->first();
            $symptoms = SymptomHistory::where("enduser_id", $enduser_id) -> get();
            return view('devs.result', [
                "status" => True,
                "name"=> $data['name'],
                "phone"=> $data['phone'],
                "trouble"=>$diagnosis,
                "symptoms" => $symptoms
            ]);
        }

    }

    public function predict(Request $request)
    {
        $data = array(
          "name" => $request -> name,
          "phone_number" => $request -> phone,
        );
        //create enduser
        $endUserCreate = Enduser::create($data);
        $enduser_id = $endUserCreate -> id;
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
                  "troubles_code" => $rule['troubles_code']
                );
                $resultCreate = Result::create($data);
                $result_id = $resultCreate -> id;

                foreach($input as $item) {
                  $data = array(
                    "enduser_id" => $enduser_id,
                    "result_id" => $result_id,
                    "symptoms_code" => $item,
                    "status" => 'True'
                  );
                  $historyCreate = SymptomHistory::create($data);
                }
                return $this->showResult($result, $enduser_id);
                exit;
            }
        }

        foreach($input as $item) {
          $data = array(
            "enduser_id" => $enduser_id,
            "symptoms_code" => $item,
            "status" => 'False'
          );
          $historyCreate = SymptomHistory::create($data);
        }
        return $this->showResult($result, $enduser_id);
    }
}
