<?php

namespace App\Http\Controllers;

use App\Models\Bpase;
use App\Models\Ush;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class Newpower extends Controller
{

    public function profile(Request $request) {
            $user =DB::table('Member')->where('id', session('user_id'))->first();
            $weightRecord = DB::table('TrakingRecord')->where('ushid', session('user_id'))->first();
            $weight = $weightRecord?$weightRecord->weight:0;
            $heightRecord = DB::table('TrakingRecord')->where('ushid', session('user_id'))->first();
            $height = $heightRecord?$heightRecord->height:0;
            $bmi = $this->calculateBMI($weight, $height);
            $bmi = number_format($bmi,2);
            $goals = $user?$user->tujuan:"No goals needed";
            $tanggal_lahir = $user->tanggal_lahir;
            $usia = $this->calculateAge($tanggal_lahir);

            $data = [
                "user"=>$user,
                "weight"=>$weight,
                "height"=>$height,
                "bmi"=>$bmi,
                "goals"=>$goals,
                "usia"=>$usia?$usia:"0"
            ];
            return view('Componen.Profile',$data);
    }

    //Function untuk menghitung BMI
    private function calculateBMI($weight, $height){
        //konversi dari cm ke m
        $heightInMeter = $height/100;

        // Calculate BMI
        if($heightInMeter!=0){
            $bmi = $weight/($heightInMeter * $heightInMeter);
            return $bmi;
        }
        else{
            return 0;
        }

    }

    // Function untuk menghitung usia
    public function calculateAge($tanggal_lahir){
        $usia = Carbon::parse($tanggal_lahir)->age;
        return $usia;
    }
}
