<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\GroupLeaders;
use App\Models\User;
use App\Models\Sop;
use App\Models\Fleet;
use App\Models\Rpic;
use Carbon\Carbon;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name have viewed dashboard page");

        $admins = User::role('Admin')->count();
        $users = User::role('User')->count();
        $rpicusers = User::role('Rpic')->count();

        $org = Organization::orderBy('id','DESC')->select('pic')->get()->toArray();
        session(['orgpic' => $org[0]['pic']]);
        $sopcount = Sop::orderBy('id','DESC')->count();
        $fleetcount = Fleet::orderBy('id','DESC')->count();
        $rpicCount = Rpic::orderBy('id','DESC')->count();

        $dateS = Carbon::now()->addMonth(3)->format('Y-m-d');
        $dateE = Carbon::now()->format('Y-m-d'); 
        
        $rpicss = DB::select("select * from rpicss where date_of_certified between '$dateE' and '$dateS'");
        $rpics = json_decode(json_encode($rpicss), true);
        $leaders = GroupLeaders::orderBy('id','DESC')->get();

        $drone_make = DB::table('fleets')
                 ->select('make', 'equipment', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->where('equipment', '=', 'Drone')
                 ->get()->toArray();
        $arr = array();
        $array = array();
        $arr2 = array();
        foreach($drone_make as $key=> $val){
            $arr[$key] = $val->make;
            $arr2[$key] = $val->total;
            $array[$key] = $val;
        }
        $dronemake = json_decode(json_encode($array), true);

        $droneLabel = json_encode($arr);
        $drones = implode(', ', $arr2);

        session(['drones' => $drones, 'droneLabel'=>$droneLabel]);

        $fleet_type = DB::table('fleets')
            ->select('equipment', DB::raw('count(*) as total'))
            ->groupBy('equipment')
            ->get()->toArray();
        
        $arr = array();
        $array = array();
        $arr2 = array();         
        foreach($fleet_type as $key=> $val){
            $arr[$key] = $val->equipment;
            $arr2[$key] = $val->total;
            $array[$key] = $val;
        }
        $equipment = json_decode(json_encode($array), true);
        
		
        
        $fleetLabel = json_encode($arr);
        $fleets = implode(', ', $arr2);

        session(['fleets' => $fleets, 'fleetLabel'=>$fleetLabel]);
	
        return view('home',compact('leaders','equipment', 'sopcount', 'fleetcount', 'rpicCount', 'rpics', 'fleets', 'admins', 'users', 'rpicusers', 'dronemake'));
    }


    public function showFleets($name){

        if($name == "Survey equipment-RTK"){
            $name = "Survey equipment/RTK";
        }
        $fleets = DB::table('fleets')
            ->where('equipment', '=', $name)
            ->get()->toArray();
        $htm = "";



        $htm .= "<thead>";
        $htm .= "<tr>";
        $htm .= "<th class='text-gray-500 font-semibold'>Equipment Name</th>";
        if($name == "Drone"){
            $htm .= "<th class='text-gray-500 font-semibold'>Assigned to</th>";
        }
        if($name == "Carry Cases" || $name == "Batteries" || $name == "Controller"){
            $htm .= "<th class='text-gray-500 font-semibold'>Drone Assigned to</th>";
        }
        if($name != "Software"){
            $htm .= "<th class='text-gray-500 font-semibold'>Make</th>";
            $htm .= "<th class='text-gray-500 font-semibold'>Model</th>";
        }
        if($name != "Drone"){
            $htm .= "<th class='text-gray-500 font-semibold'>Group Owner</th>";
        }
        $htm .= "</tr>";
        $htm .= "</thead>";
        $htm .= "<tbody >";

                                            
        
        foreach($fleets as $key=> $val){
            $equipment = $val->equipment;
            $make = $val->make;
            $model = $val->model;
            $fleetName = $val->name;
            $main_rpics = $val->main_rpics;
            $groupowner = $val->group_own_the_dron;

            $droneAssigned = "";
            if($val->drone != "" ){
                $drone = DB::table('fleets')
                ->select('name as drone')
                ->where('id', '=', $val->drone)
                ->get()->toArray();
                $droneAssigned = $drone[0]->drone;
            }


            $htm .= "<tr>";
            $htm .= "<td>$fleetName</td>";
            if($name == "Drone"){
                $htm .= "<td>$main_rpics</td>";
            }
            if($name == "Carry Cases" || $name == "Batteries" || $name == "Controller"){
                $htm .= "<td>$droneAssigned</td>";
            }
            if($name != "Software"){
                $htm .= "<td>$make</td>";
                $htm .= "<td>$model</td>";
            }
            if($name != "Drone"){
                $htm .= "<td>$groupowner</td>";
            }
            $htm .= "</tr>";
        }
        $htm .= "</tbody>";
       
        return $htm;
    }
    
}
