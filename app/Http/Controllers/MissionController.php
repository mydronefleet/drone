<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;
use App\Models\Rpic;
use App\Models\Mission;
use App\Models\FleetHasUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Mail;
use Carbon\Carbon;
use App\Mail\YourMissionDetailsFromMyDroneFleet;
use App\Mail\AssignedMissionDetailsFromMyDroneFleet;
use App\Mail\MissionApprovedFromMyDroneFleet;
use App\Mail\MissionNotApprovedFromMyDroneFleet;
use Response;
use DB;


class MissionController extends Controller
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
        
        if(isset($_GET['email']) && $_GET['email'] != ""){
            $user = User::where('email',$_GET['email'])->first();
            
            $missions = Mission::where('pilot', $user->id)->orderBy('id','DESC')->get();
        }else{
            $missions = Mission::orderBy('id','DESC')->get();
        }
        
       // Log::info("$name have viewed fleet list");
       
       
        return view('mission.index',compact('missions'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$rpics = Rpic::orderBy('id','DESC')->get();


        $authorizedRoles = ['Admin', 'Rpic'];

        $rpics = User::whereHas('roles', static function ($query) use ($authorizedRoles) {
                    return $query->whereIn('name', $authorizedRoles);
                })->get();
        

        return view('mission.create',compact('rpics'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $MD = $request->input('mission_date');

        $mission_date = Carbon::createFromFormat('m-d-Y', $MD)->format('Y-m-d');
        
        $mission = Mission::create([
            
            'name'                 => $request->input('name'),
            'requestor_name'       => $request->input('rname'),
            'requestor_email'      => $request->input('remail'),
            'mission_date'         => $mission_date,
            'mission_types'        => $request->input('mission_type'),
            'mission_location'     => $request->input('location2'),
            'latitude'     		   => $request->input('lat'),
            'longitude'     	   => $request->input('long'),
            'pilot'                => $request->input('pilot'),
            'description'          => $request->input('description')
        ]);
        $missionID = $mission->id;
        
        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is created new mission id $missionID.");


        $mission = Mission::find($missionID)->toArray();
        

        foreach ($mission as $key=>$val){
            if($key == "pilot" && $val != ""){
                $pilot = DB::table('users')
                ->select('name')
                ->where('id', '=', $val)
                ->get()->toArray();
                $mission[$key] = $pilot[0]->name;
            }
        }


        $user = Auth::user();
        $name = $user->name;
       
    
        return view('mission.modalshow',compact('mission'));
    }


    public function show($id)
    {
        $mission = Mission::find($id)->toArray();
        
        
       foreach ($mission as $key=>$val){
           if($key == "pilot" && $val != ""){
                $pilot = DB::table('users')
                ->select('name')
                ->where('id', '=', $val)
                ->get()->toArray();
                $mission[$key] = $pilot[0]->name;
           }
       }
       $flights = DB::table('flights')
       ->where('mission_id', '=', $id)
       ->get()->toArray();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is viewing fleet detail id: $id.");
    
        return view('mission.show',compact('mission', 'flights'));
        //return Response::json($mission);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mission = Mission::find($id);

        $authorizedRoles = ['Admin', 'Rpic'];
        $rpics = User::whereHas('roles', static function ($query) use ($authorizedRoles) {
            return $query->whereIn('name', $authorizedRoles);
        })->get();


        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is editing Mission detail id: $id.");

        return view('mission.edit',compact('mission', 'rpics'));
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
        
        $MD = $request->input('mission_date');

        $mission_date = Carbon::createFromFormat('m-d-Y', $MD)->format('Y-m-d');

        $mission = Mission::find($id);
        
        $mission->name                      = $request->input('name');
        $mission->requestor_name            = $request->input('requestor_name');
        $mission->requestor_email           = $request->input('requestor_email');
        $mission->mission_date              = $mission_date;
        $mission->mission_types             = $request->input('mission_type');
        $mission->mission_location          = $request->input('location');
        $mission->pilot                     = $request->input('pilot');
        $mission->description               = $request->input('description');
        
        $mission->save();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is updating mission detail successfully, id: $id.");
    
         return redirect()->route('missions.show',$id)
                        ->with('success','Mission updated successfully');
    }
    public function changeStatus($id)
    {
        if(isset($_GET['action']) && $_GET['action'] == 'approve'){
            $status = 1;
            $action = "Approved";
        }else{
            $status = 0;
            $action = "Not Approved";
        }
        
        $mission = Mission::find($id);

        
        $mission->status                      = $status;
        
        
        $mission->save();

        $user = Auth::user();
        $name = $user->name;
        $data = array();
        $data['name'] = $mission->name;
        $data['action'] = $action;
        $data['requestor'] = $mission->requestor_name;
        Log::info("$name is updating mission status successfully, id: $id.");
        
        if($status == 1){
            Mail::to($mission->requestor_email)->send(new MissionApprovedFromMyDroneFleet($data));
        }else{
            Mail::to($mission->requestor_email)->send(new MissionNotApprovedFromMyDroneFleet($data));
        }

       if (Mail::failures()) {
          echo 'Sorry! Please try again latter';
      }else{
        return redirect()->route('missions.index')
        ->with('success','Mission updated successfully');
           
         }

         
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("missions")->where('id',$id)->delete();

        $user = Auth::user();
        $name = $user->name;
        Log::info("$name is deleting mission, id: $id.");

        return redirect()->route('missions.index')
                        ->with('success','Mission deleted successfully');
    }

    public function sendNotificationEmail($id){

        $mission = Mission::find($id)->toArray();
        

        foreach ($mission as $key=>$val){
           if($key == "pilot" && $val != ""){
                $pilot = DB::table('users')
                ->select('name', 'email')
                ->where('id', '=', $val)
                ->get()->toArray();
                $mission[$key] = $pilot[0]->name;
                $mission['email'] = $pilot[0]->email;
           }
        }
       
        Mail::to($mission['requestor_email'])->send(new YourMissionDetailsFromMyDroneFleet($mission));
 
        Mail::to($mission['email'])->send(new AssignedMissionDetailsFromMyDroneFleet($mission));
      if (Mail::failures()) {
          echo 'Sorry! Please try again latter';
      }else{
            return redirect()->route('missions.show',$id)
        ->with('success','Great! Successfully send in your mail');
           
         }
    }
}
