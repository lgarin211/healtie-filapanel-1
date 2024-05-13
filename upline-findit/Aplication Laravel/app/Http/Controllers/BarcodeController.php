<?php

namespace App\Http\Controllers;


use App\Models\Bpase;
use App\Models\Trackpase;
use App\Models\Ush;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class BarcodeController extends Controller
{
    public function poinrequest($link)
    {
        try {
            $response = Http::get('https://api.spoonacular.com/food/images/analyze', [
                'imageUrl' => $link,
                'apiKey' => 'c949cb76ba444f39a5ac1c37e5caa45a',
            ]);
            $data = $response->json();
            $sup["calories"]=($data["nutrition"]["calories"]["value"]);
            $sup["fat"]=($data["nutrition"]["fat"]["value"]);
            $sup["protein"]=($data["nutrition"]["protein"]["value"]);
            $sup["carbs"]=($data["nutrition"]["carbs"]["value"]);
            $sup["name"]=($data["category"]["name"]);
            $data=$sup;
            return $data;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    function Newfood(Request $request) {
        try{
            if ($request->pat){
                $dapa=[];
                if ($request->hasFile('pati')||$request->hasFile('pato')) {
                    $dapa=$this->barcode($request);
                    return view($dapa[0],$dapa[1]);
                }else{
                    $dapa[0] = "mvp.Barcode";
                }
                return view($dapa[0]);
            }else{
                $newfood = DB::table('Konsumsi')->get();
                $sum = DB::table('Konsumsi')
                            ->selectRaw(
                                'SUM(natrium) AS total_natrium, SUM(fat) AS total_fat, SUM(sugar) AS total_sugar, SUM(kcal) AS total_kcal',
                            )
                            ->where('ushid', session('user_id'))
                            ->where('updated_at', '<=', Date('Y-m-d H:i:s'));
                $total_konsumsi = $sum->first();
                $Breakfast = $sum->where('paseline', 'Breakfast')->first();
                $Lunch = $sum->where('paseline','Lunch')->first();
                $Dinner = $sum->where('paseline','Dinner')->first();
                $Snack = $sum->where('paseline','Snack')->first();

                $data = [
                    'Konsumsi' => $newfood,
                    'TotalKonsumsi' => $total_konsumsi->total_kcal?$total_konsumsi->total_kcal:0,
                    'Breakfast' => $Breakfast->total_kcal?$Breakfast->total_kcal:0,
                    'Lunch' => $Lunch->total_kcal?$Lunch->total_kcal:0,
                    'Dinner' => $Dinner->total_kcal?$Dinner->total_kcal:0,
                    'Snack' => $Snack->total_kcal?$Snack->total_kcal:0
                ];

                return view('Componen.InputMeals',$data);
            }
        }catch(\Exception $e){
            $this->dump("Terjadi kesalahan");
        }
    }
    public function dump($text){
        echo '<div class="alert alert-danger" role="alert">';
        print_r($text);
        echo "</div>";
    }

    public function barcode(Request $request)
    {
        $defied=[];
        $trackpase=[];
        $lasteat=[];
        try {
            $data = [];
            if ($request->file('pati')) {
                $request->validate([
                    'pati' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
                ]);

                $pati = $request->file('pati');
                $patiFileName = time() . '.' . $pati->getClientOriginalExtension();
                $pati->move(public_path('images'), $patiFileName);
                $patiPath = public_path('images') . '/' . $patiFileName;
                $response = Http::get('http://47.245.121.87/fokuspoin?imgpat=' . $patiPath);
                $barcode = $response->json();
                $defied = DB::table('dfoods')->where('barcode', 'like', $barcode . '%')->first();
                $trackpase = Trackpase::create([
                    'barcode' => $barcode,
                    'dfoodid' => $defied->id,
                    'ushid' => session('user_id'),
                    'poster' => $patiFileName,
                    "paseline" => $request->pat,
                ]);
                $lasteat=DB::table('Konsumsi')->where('ushid', session('user_id'))->latest()->first();
                $data = [
                    "defied" => $defied,
                    "added" => $trackpase,
                    "lasteat" => $lasteat
                ];
            }
            elseif ($request->file('pato')) {
                $request->validate([
                    'pato' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
                ]);
                $pato = $request->file('pato');
                $pato->move(public_path('images'), time() . '.' . $pato->getClientOriginalExtension());
                $pathfileurl = 'images' . '/' . time() . '.' . $pato->getClientOriginalExtension();
                $sup=$this->poinrequest(url($pathfileurl));
                $lasteat=DB::table('Konsumsi')->where('ushid', session('user_id'))->latest()->first();
                $lasteat->kcal=$sup["calories"];
                $lasteat->fat=$sup["fat"];
                $lasteat->sugar=$sup["protein"];
                $lasteat->natrium=$sup["carbs"];
                $lasteat->name=$sup["name"];
                $lasteat->poster='ayam.jpg';
                $data = [
                    "defied" => $defied,
                    "added" => $trackpase,
                    "lasteat" => $lasteat
                ];
            }

            if (!($request->hasFile('pati')||$request->hasFile('pato'))) {
                $this->dump('No file uploaded.');
                throw new \Exception('No file uploaded.');
            }
            return ["Componen.Meal_info",$data];

        } catch (\Exception $e) {
            $this->dump("terjadi kesalahan");
        }

        return redirect()->route('home');
    }

}

