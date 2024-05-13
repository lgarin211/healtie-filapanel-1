<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Bpase;
use App\Models\Dfood;
use App\Models\Trackpase;
use App\Models\SleepTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasePath extends Controller
{
    // menghitung BMI
    public function countingBmi(Request $request)
    {
        $weight = $request->weight;
        $height = $request->height;
        $bmi = $weight / ($height * $height);
        $bmi = round($bmi);
        $bmi = $bmi < 18.5 ? 'Underweight' : ($bmi < 24.9 ? 'Normal' : 'Overweight');
        try{
            // use model Bpase
            $bmi=[
                'height' => $request->height,
                'weight' => $request->weight,
                'bmi' => $bmi,
                'goals' => $request->goals,
                'periode' => $request->periode,
                'ushid' => $request->ushid,
            ];
            Bpase::create($bmi);

        }catch(\Exception $e){
            return back()->with('error', 'Failed to save data');
        }
        return $bmi;
    }

    // Query ke Dfood model dan cari data yang memiliki barcode sama
    public function getBpase(Request $request)
    {
        $have = Dfood::where('barcode', $request->barcode)->first();
        $trackpase = null;
        if($have->isEmpty()){
            return back()->with('error', 'Data not found');
        }else{
            // try save to model trackpase
            try{
                $trackpase=[
                    "ushid" => $have->ushid,
                    "dfoodid" => $have->dfoodid,
                    "paseline" => $request->paseline,
                    "poster" => $have->poster,
                ];

                Trackpase::create($trackpase);
                $trackpase[]=["updated_at"=>date("Y-m-d H:i:s")];
                $trackpase = Trackpase::where($trackpase)->get();
                return $trackpase;

            }catch(\Exception $e){
                return back()->with('error', 'Failed to save data');
            }

        }

    }


    // extrack quiz dari model Doquiz
    public function getQuiz(Request $request)
    {
        // get quiz
        $quiz=Quiz::get();
        // loop quiz
        foreach($quiz as $k=>$q){
            $Soal=$q->soal = json_decode($q->soal);
            $Opsi=$q->opsi = json_decode($q->opsi);
            $Score=$q->score = json_decode($q->score);

            $quiz[$k]=[
                    'soal'=>$Soal,
                    'opsi'=>$Opsi,
                    'score'=>$Score,
            ];

            return $quiz;
        }

    }


    // sleeptraking
    public function sleepTraking(Request $request)
    {
        dd(DB::getQueryLog());
        // call all data from model SleepTrack in range 2 week base on created date and id
        $sleeptrack = SleepTrack::whereBetween('created_at', [now()->subWeeks(2), now()])->where('ushid', $request->ushid)->get();
        // loop
        foreach($sleeptrack as $k=>$s){
            $timetotal= strtotime($s->wake) - strtotime($s->start);
            $sleepquality = $timetotal / 60;
            $sleepquality = $sleepquality < 7 ? 'Kurang' : ($sleepquality < 9 ? 'Cukup' : 'Baik');
            $sleeptrack[$k]=[
                'tanggal'=>$s->tanggal,
                'start'=>$s->start,
                'wake'=>$s->wake,
                'esensi'=>$s->esensi,
                'deskpoin'=>$s->deskpoin,
                'timetotal'=>$timetotal,
                "sleepquality"=>$sleepquality,
            ];
        }

        return $sleeptrack;
    }


}
