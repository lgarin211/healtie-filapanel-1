<?php

namespace App\Http\Controllers;

use App\Models\Bpase;
use App\Models\Ush;
use App\Models\Water;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UshController extends Controller
{
    public $userdata;

    public function dump($data) {
        echo '<div class="alert alert-danger" role="alert">';
        print_r($data);
        echo "</div>";
    }

    public function logout() {
        session()->flush();
        return redirect()->route('login');
    }

    public function login(Request $request) {
        try {
            if ($request->isMethod('post')) {
                $email = $request->input('email');
                $password = $request->input('password');
                $user = DB::table('Member')->where('email', $email)->first();

                if (!$user) {
                    $idsession = session('user_id');
                    $newUser = User::where('id', $idsession)->first();
                    if ($newUser) {
                        return redirect()->route('Goals');
                    }
                }
                elseif (Hash::check($password, $user->password)) {
                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('user_email', $user->email);
                    $request->session()->put('user_name', $user->name);
                    $request->session()->put('user_alamat', $user->alamat);
                    $request->session()->put('user_pp', $user->profilepaat);
                    return redirect()->route('home');
                } else {
                    $this->dump("Tertapat Kesalah Proses");
                    // return redirect()->back()->with('error', 'Invalid email or password');
                }
            }
        } catch (\Exception $e) {
            $this->dump("Tertapat Kesalah Proses");
            // return redirect()->back()->with('error', 'Failed to process the request');
        }

        return view('login');
    }

    public function register(Request $request) {
        try {
            if (session('user_id')) {
                return redirect()->route('login');
            } elseif ($request->isMethod('post')) {
                $name = $request->input('psw-repeat') ? $request->input('psw-repeat') : session('user_name');
                $email = $request->input('email') ? $request->input('email') : session('user_email');
                $password = $request->input('password') ? $request->input('password') : session('user_password');

                $data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => Hash::make($password)
                ];

                $user = User::create($data);

                if ($user) {
                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('user_email', $user->email);
                    $request->session()->put('user_name', $user->name);
                }

                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            $this->dump("Tertapat Kesalah Proses");
            // $this->dump($e->getMessage());
        }

        return view('Componen.Signup');
    }

    public function EditProfile() {
        $user = DB::table('Member')->where('id', session('user_id'))->first();
        $lastpase = DB::table('bpases')->where('ushid', $user->id)->orderBy('created_at', 'desc')->first();
        $data = [
            "user" => $user,
            "pane" => $lastpase
        ];
        return view('Componen.EditProfile', $data);
    }

    public function home(Request $request) {
        $user_id = $request->session()->get('user_id');
        $ovlin = DB::table('Konsumsi')->where('ushid', $user_id);
        $specificDateTime = Carbon::now();

        $results = DB::table('Konsumsi')
            ->selectRaw('SUM(natrium) AS total_natrium, SUM(fat) AS total_fat, SUM(sugar) AS total_sugar, SUM(kcal) AS total_kcal')
            ->where('ushid', $user_id)
            ->where('updated_at', '<=', $specificDateTime)
            ->first();
        try {
            $water = DB::table('waters')->where('ushid', $user_id)->whereDate('created_at', Carbon::today())->first();
            if ($water) {
                $gelas = $water->targetted / 5;
                if ($gelas == 0) {
                    throw new \Exception("Gelas is zero");
                }
            } else {
                $gelas = 0;
                throw new \Exception("Gelas is zero");
            }
        } catch (\Exception $e) {
            $water = (object) ['targetted' => 0];
            $gelas = 0;
        }

        $data = [
            'user_id' => $request->session()->get('user_id'),
            'user_email' => $request->session()->get('user_email'),
            'user_name' => $request->session()->get('user_name'),
            'user_alamat' => $request->session()->get('user_alamat'),
            'user_pp' => $request->session()->get('user_pp'),
            "water" => $water,
            "gelas" => $gelas,
            'TrimNutrisi' => [
                "onemth" => $ovlin->where('updated_at', '>=', date('Y-m-d', strtotime('-1 month')))->get(),
                "onewk" => $ovlin->where('updated_at', '>=', date('Y-m-d', strtotime('-1 week')))->get(),
                "oneday" => $ovlin->where('updated_at', '>=', date('Y-m-d', strtotime('-1 day')))->get(),
                "sum" => $results
            ],
        ];

        return view('home', $data);
    }

    public function Healti_food(Request $request) {
        $allresep = DB::table('food_rs')->get();
        $nwc = [];

        foreach ($allresep as $key => $value) {
            $nwc[$value->target][] = $value;
        }

        $data = [
            "resep" => $nwc
        ];

        return view('mvp.Healti_food', $data);
    }

    public function workout(Request $request) {
        $Datauser = DB::table('TrakingRecord')->where('ushid', session('user_id'))->first();
        $Datauser->tanggal_lahir = Carbon::parse($Datauser->tanggal_lahir)->age;
        $Datauser->height = $Datauser->height / 100;
        $Datauser->weight = $Datauser->weight / 100;
        $Datauser->gender = $Datauser->gender == "male" ? 1 : 0;
        $Datauser->Detail = DB::table('Member')->where('id', session('user_id'))->first();
        $Datauser->Detail->goals = DB::table('ushes')->where('id', session('user_id'))->first()->tujuan;
        try {
            $url = 'http://localhost:5000/predict?sex=' . $Datauser->gender . '&age=' . $Datauser->tanggal_lahir . '&height=' . $Datauser->height . '&weight=' . $Datauser->weight . '&hypertension=' . $Datauser->Hypotermia . '&diabetes=' . $Datauser->Diabetes . '&goal=' . $Datauser->goals;
            $response = Http::get($url);
            $flaskrespon = $response->json();

            $data = [
                "user" => $Datauser,
                "workout" => $flaskrespon[0],
                "URI" => $url,
            ];

            return view('Componen.personal', $data);
        } catch (\Exception $e) {
            $this->dump("Tertapat Kesalah Proses");
            return $e->getMessage();
        }
    }

    public function Goals(Request $request) {
        try {
            $weight = $request->input('weight');
            $height = $request->input('height');
            $age = $request->input('age');
            $gender = $request->input('gender') == "Male" ? "male" : "female";
            $hypertension = $request->input('hypertension') === "Yes" ? 1 : 0;
            $diabetes = $request->input('diabetes') === "Yes" ? 1 : 0;
            $goal = "";

            foreach ($request->input('health_goals') as $key => $value) {
                $goal .= $value . '';
            }

            $ali = [
                "id" => session('user_id'),
                "weight" => $weight,
                "height" => $height,
                "tanggal_lahir" => $age,
                "gender" => $gender,
                "Hypotermia" => $hypertension,
                "Diabetes" => $diabetes,
                "tujuan" => $goal,
                "alamat" => "bogor",
                "profilepaat" => "01HX74QANPGPNGJ8YXGJ770XZM.png",
            ];

            $user = Ush::create($ali);

            Bpase::create([
                "ushid" => $user->id,
                "weight" => $weight,
                "height" => $height,
                "periode" => Carbon::now(),
                "bmi" => ($weight / ($height * $height)),
                "goals" => (count($request->input('health_goals')) % 2),
            ]);

            return redirect()->route('home');
        } catch (\Exception $e) {
            $this->dump("Tertapat Kesalah Proses");
        }

        return view('Componen.Goals');
    }

    // watter Controller
    public function addprogreswatter(Request $request) {
        $existingData = Water::where('ushid', session('user_id'))
                             ->whereDate('created_at', Carbon::today())
                             ->first();

        // Jika menambahkan air
        if ($request->input('add')) {
            $targetted = ($existingData) ? intval($existingData->targetted) + 5 : 5;
            $data = ($targetted == 5) ? Water::create([
                "ushid" => session('user_id'),
                "targetted" => $targetted,
            ]) : Water::where('ushid', session('user_id'))
                     ->whereDate('created_at', Carbon::today())
                     ->update(["targetted" => $targetted]);
        } else {
            // Jika mengurangi air
            $targetted = ($existingData) ? intval($existingData->targetted) - 5 : 0;
            $data = ($existingData) ? Water::where('ushid', session('user_id'))
                                            ->whereDate('created_at', Carbon::today())
                                            ->update(["targetted" => $targetted]) : null;
        }
        return redirect()->route('home');
    }


}
