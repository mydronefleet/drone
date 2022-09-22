<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;
use App\Models\Mission;
use App\Models\Flight;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Response;
use DB;


class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         //$this->middleware('permission:fleet-list|fleet-create|fleet-edit|fleet-delete', ['only' => ['index','store']]);
         //$this->middleware('permission:fleet-create', ['only' => ['create','store']]);
         //$this->middleware('permission:fleet-edit', ['only' => ['edit','update']]);
         //$this->middleware('permission:fleet-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
       // Log::info("$name have viewed fleet list");

        return view('flight.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $missions = Mission::orderBy('id','DESC')
        ->where('status', '!=' , 2)
        ->get()->toArray();
        $drones = DB::table("fleets")->where('equipment','Drone')->get();
       $i = 0;
       foreach ($missions as $key=>$val){
				
                $pilots = DB::table('users')
                ->select('name', 'email')
                ->where('id', '=', $val['pilot'])
                ->get()->toArray();
                foreach ($pilots as $key=>$pilot){
                $missions[$i]['pilot'] = $pilot->name;
                $missions[$i]['email'] = $pilot->email;
                }
        
        $i++;
        }
       
        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is on create new flight page.");
        return view('flight.create',compact('missions'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required|unique:fleets,name'
        ]);
		*/
		
        $mission_id = $request->input('mission_id');
        $flight = Flight::create([
            'mission_id'                    => $mission_id,
            'mission_name'                 => $request->input('mission_name'),
            'was_rpic'                     => $request->input('rpic_conf'),
            'flight_delayed'                      => $request->input('flight_delayed'),
            'explaination'                      => $request->input('delayed_explaination'),
            'who_was'                     => $request->input('whowas'),
            'deviat'               => $request->input('deviate'),
            'flight_plan'            => $request->input('flight_plan'),
            'next_flight'                 => $request->input('operable'),
            'explain_why'             => $request->input('description')
        ]);
        $flightID = $flight->id;
        
        $mission = Mission::find($mission_id);

        
        $mission->status                      = 2;
        
        
        $mission->save();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is created new flight closeout id $flight.");


        return redirect()->route('missions.index')
                        ->with('success','Flight closeout created successfully');
    }


    public function show($id)
    {
        $fleet = Fleet::find($id)->toArray();
        

       foreach ($fleet as $key=>$val){
           if($key == "drone" && $val != ""){
                $drone = DB::table('fleets')
                ->select('name as drone')
                ->where('id', '=', $val)
                ->get()->toArray();
                $fleet[$key] = $drone[0]->drone;
           }
       }


        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is viewing fleet detail id: $id.");
    
        return Response::json($fleet);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fleet = Fleet::find($id);
        $drones = DB::table("fleets")->where('equipment','Drone')->get();


        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is editing fleet detail id: $id.");

        return view('fleet.edit',compact('fleet', 'drones'));
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
        $this->validate($request, [
            'name' => 'required'
        ]);
        $path = "";
        
    
        if ($request->hasFile('file')) {
    
            $name = $request->file('file')->getClientOriginalName();
 
            $path = $request->file('file')->store('public/images');
        }
    //print_r($path);
    //die();
        $fleet = Fleet::find($id);
        
        $fleet->org_id                  = $request->input('org_id');
        $fleet->name                    = $request->input('name');
        $fleet->make                    = $request->input('make');
        $fleet->model                   = $request->input('model');
        $fleet->tail_number             = $request->input('tail_number');
        $fleet->date_purchased          = $request->input('date_purchased');
        $fleet->batteries               = $request->input('batteries');
        $fleet->who_purchased           = $request->input('who_purchased');
        $fleet->main_rpics              = $request->input('main_rpics');
        $fleet->group_own_the_dron      = $request->input('group_own_the_dron');
        $fleet->drone                   = $request->input('drone');
        if($path != ""){
            $fleet->pic                      = $path;
        }
        $fleet->short_desc              = $request->input('short_desc');
        $fleet->long_desc               = $request->input('long_desc');
        
        $fleet->save();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is updating fleet detail successfully, id: $id.");
    
         return redirect()->route('fleets.index')
                        ->with('success','Fleet updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("fleets")->where('id',$id)->delete();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is deleting fleet, id: $id.");

        return redirect()->route('fleets.index')
                        ->with('success','Fleet deleted successfully');
    }
}
