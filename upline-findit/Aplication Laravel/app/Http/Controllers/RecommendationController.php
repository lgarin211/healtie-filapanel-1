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

class RecommendationController extends Controller{
    public function recommendation(Request $request){
        $user = DB::table('Member')->where('id', session('user_id'))->first();
        $name = $user->name;


        $data = [
            "name" => $name
        ];

        dd($data);
        // return view('Componen.Recommendation', $data);
    }
}
