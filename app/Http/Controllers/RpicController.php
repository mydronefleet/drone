<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Organization;
use App\Models\User;
use App\Models\Rpic;
use App\Models\RpicUser;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Response;
use DB;

class RpicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:rpic-list|rpic-create|rpic-edit|rpic-delete', ['only' => ['index','store']]);
         $this->middleware('permission:rpic-create', ['only' => ['create','store']]);
         $this->middleware('permission:rpic-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:rpic-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rpics = Rpic::orderBy('id','DESC')->get();
        return view('rpic.index',compact('rpics'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::orderBy('id','DESC');
        return view('rpic.create',compact('organizations'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate($request, [
            'email' => 'required|unique:users,email',
            
        ]);*/

        

        $path = "";
        $data = array();
        if ($request->hasFile('file')) {
            $folderPath = storage_path('app/public/images/');
            
            $name = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $name = uniqid() . '.'.$extension;
            $fullpath = $folderPath.$name;

            $path = 'public/images/'.$name;
            file_put_contents($fullpath, $image_base64);
        }
        if ($request->hasFile('certificate')) {

            foreach($request->file('certificate') as $file)
            {


                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];

                $string = str_shuffle($pin);



                $name = time().$string.'.'.$file->extension();
                $file->move(storage_path().'/public/images/', $name);  
                $data[] = $name;  
            }

            //$certificatename = $request->file('certificate')->getClientOriginalName();
 
            //$certificatepath = $request->file('certificate')->store('public/images');
        }
    
        $DOC = $request->input('date_of_certified');

        $date_of_certified = Carbon::createFromFormat('m-d-Y', $DOC)->format('Y-m-d');
    
        $rpic = Rpic::create([
            'org_id'                => $request->input('org_id'),
            'first_name'            => $request->input('fname'),
            'last_name'             => $request->input('lname'),
            'email'                 => $request->input('email'),
            'date_of_certified'     => $date_of_certified,
            'certificate_exp'       => date('Y-m-d H:i:s', strtotime('+2 years', strtotime($date_of_certified))),
            'mission_type'          => $request->input('mission_type'),
            'pic'                   => $path,
            'certificate'           => json_encode($data),
            'short_desc'            => $request->input('short_desc'),
            'long_desc'             => $request->input('long_desc')
        ]);

        $user = User::where('email', '=', $request->input('email'))->first();
        if ($user === null) {
            $user = User::create([
                'name' => $request->input('fname'). ' '.$request->input('lname'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('fname')),
            ]);
        }

        $rpicID = $rpic->id;

        
        $user->assignRole('Rpic');
        $userID = $user->id;

        $RpicUser = RpicUser::create([
            'rpics_id' => $rpicID,
            'user_id' => $userID
        ]);
        
        
        return redirect()->route('rpics.index')
                        ->with('success','Rpic created successfully');
    }

    public function show($id)
    {
        $rpic = Rpic::find($id)->toArray();
        
    
        return Response::json($rpic);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rpic = Rpic::find($id);
        
        return view('rpic.edit',compact('rpic'));
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
        /*$this->validate($request, [
            'file' => 'dimensions:ratio=0/0',
        ],
        [
            'file.dimensions'=> 'Please upload an image in sqaure dimension',
        ]);
        */
        $path = "";
        $data = array();
        if ($request->hasFile('file')) {
    
            $folderPath = storage_path('app/public/images/');
            
            $name = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $name = uniqid() . '.'.$extension;
            $fullpath = $folderPath.$name;

            $path = 'public/images/'.$name;
            file_put_contents($fullpath, $image_base64);
        }

        if ($request->hasFile('certificate')) {

            foreach($request->file('certificate') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(storage_path().'/public/images/', $name);  
                $data[] = $name;  
            }

            //$certificatename = $request->file('certificate')->getClientOriginalName();
 
            //$certificatepath = $request->file('certificate')->store('public/images');
        }
        $rpic = Rpic::find($id);

        $DOC = $request->input('date_of_certified');

        $date_of_certified = Carbon::createFromFormat('m-d-Y', $DOC)->format('Y-m-d');
       

       
        $rpic->org_id                   = $request->input('org_id');
        $rpic->first_name               = $request->input('first_name');
        $rpic->last_name                = $request->input('last_name');
        $rpic->email                    = $request->input('email');
        $rpic->date_of_certified        = $date_of_certified;
        $rpic->certificate_exp          = date('Y-m-d H:i:s', strtotime('+2 years', strtotime($date_of_certified)));
        $rpic->mission_type             = $request->input('mission_type');
        $rpic->callsign                 = $request->input('callsign');
        if($path != ""){
            $rpic->pic                      = $path;
        }
        if($data != ""){
            $rpic->certificate                      = json_encode($data);
        }
        $rpic->short_desc               = $request->input('short_desc');
        $rpic->long_desc                = $request->input('long_desc');
        $rpic->save();
    
         return redirect()->route('rpics.index')
                        ->with('success','Rpic updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("rpicss")->where('id',$id)->delete();
        return redirect()->route('rpics.index')
                        ->with('success','Rpic deleted successfully');
    }
}
