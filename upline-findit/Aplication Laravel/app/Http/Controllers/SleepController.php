<?php

namespace App\Http\Controllers;

use App\Models\SleepSchedule;
use App\Models\Bpase;
use App\Models\SleepTrack;
use App\Models\Ush;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class SleepController extends Controller
{
    public function sleepTrack(Request $request){
        $sleepku=SleepTrack::WHERE('ushid',session('user_id'))->get();
        foreach ($sleepku as $key => $sleep) {
            $mulai = Carbon::parse($sleep->start);
            $wakeup = Carbon::parse($sleep->wake);
            $durasi = ($mulai->diffInHours($wakeup)<=0)?24+$mulai->diffInHours($wakeup):$mulai->diffInHours($wakeup);
        }
        return view('Componen.TambahDataTidur');
    }

    // addsleepTrack
    public function addsleepTrack(Request $request) {
        $newdata=[
            'ushid' => session('user_id'),
            'start' => $request->input('mulai'),
            'wake' => $request->input('wakeup'),
            'tanggal' => Carbon::now(),
            'esensi'=>"-",
            'deskpoin'=>"-"
        ];
        $nw=SleepTrack::create($newdata);
        return redirect()->route('home');
    }
}
