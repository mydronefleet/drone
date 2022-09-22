<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Organization;
use App\Models\Fleet;
use App\Models\User;
use App\Models\FleetHasUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Response;
use DB;


class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:fleet-list|fleet-create|fleet-edit|fleet-delete', ['only' => ['index','store']]);
         $this->middleware('permission:fleet-create', ['only' => ['create','store']]);
         $this->middleware('permission:fleet-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:fleet-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $user = Auth::user();
        $name = $user->name;
        $id = $user->id;
        $roles = $user->roles->first()->name;
        
            $fleets = Fleet::orderBy('id','DESC')->get();
                    
            
           /* $fleets = Fleet::join("fleet_has_users","fleet_has_users.fleet_id","=","fleets.id")
            ->where("fleet_has_users.user_id",$id)
            ->get();
        */
        Log::info("$name have viewed fleet list");

        return view('fleet.index',compact('fleets'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        $organizations = Organization::orderBy('id','DESC');
        $drones = DB::table("fleets")->where('equipment','Drone')->get();
       
        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is on create new fleet page.");
        return view('fleet.create',compact('organizations', 'drones'));
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
        ]);*/
		
		
		
 
        $path = "";
        if ($request->hasFile('file')) {
    
            $name = $request->file('file')->getClientOriginalName();
 
            $path = $request->file('file')->store('public/images');
        }
 
        /* $save = new File;
 
        $save->name = $name;
        $save->path = $path; */
 
        $DP = $request->input('date_purchased');

        $date_purchased = Carbon::createFromFormat('m-d-Y', $DP)->format('Y-m-d');
       
        
        $fleet = Fleet::create([
            'org_id'                    => 1,
            'equipment'                 => $request->input('equipment'),
            'drone'                     => $request->input('drone'),
            'name'                      => $request->input('name'),
            'make'                      => $request->input('make'),
            'model'                     => $request->input('model'),
            'tail_number'               => $request->input('tail_number'),
            'date_purchased'            => $date_purchased,
            'batteries'                 => $request->input('batteries'),
            'who_purchased'             => $request->input('who_purchased'),
            'main_rpics'                => $request->input('main_rpics'),
            'assigned_to'               => $request->input('assigned_to'),
            'group_own_the_dron'        => $request->input('group_own_the_dron'),
            'flight_load_out'           => $request->input('flight_load_out'),
            'physical_location'         => $request->input('physical_location'),
            'pic'                       => $path,
            'short_desc'                => $request->input('short_desc'),
            'long_desc'                 => $request->input('long_desc')
        ]);
        $fleetID = $fleet->id;
        
        
        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is created new fleet id $fleetID.");


        return redirect()->route('fleets.index')
                        ->with('success','Fleet created successfully');
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

        $DP = $request->input('date_purchased');

        $date_purchased = Carbon::createFromFormat('m-d-Y', $DP)->format('Y-m-d');

        $fleet = Fleet::find($id);
        
        $fleet->org_id                  = $request->input('org_id');
        $fleet->name                    = $request->input('name');
        $fleet->make                    = $request->input('make');
        $fleet->model                   = $request->input('model');
        $fleet->tail_number             = $request->input('tail_number');
        $fleet->date_purchased          = $date_purchased;
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
