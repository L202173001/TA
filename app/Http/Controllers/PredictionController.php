<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Trouble;
use App\Models\Vrule;

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

    public function showResult($data)
    {
        // Fungsi ini digunakan untuk menampilkan hasil diagnosa
        if($data['status'] == False) {
            return view('devs.result', [
                "status"=>False,
                "name"=> $data['name'],
                "phone"=> $data['phone']
            ]);
        } else {
            $diagnosis = Trouble::where("troubles_code",$data['troubles_code'])->first();

            return view('devs.result', [
                "status" => True,
                "name"=> $data['name'],
                "phone"=> $data['phone'],
                "trouble"=>$diagnosis
            ]);
        }

    }

    public function predict(Request $request)
    {
        // Validasi input nama dan nomor telepon,
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

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

                return $this->showResult($result);
                exit;
            }
        }

        return $this->showResult($result);
    }
}
