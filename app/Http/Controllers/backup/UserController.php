<?php
    
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Response;
use DB;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            $user = Auth::user();
            $id = $user->id;
            $roles = $user->roles->first()->name;

            $users = User::join("model_has_roles","model_has_roles.model_id","=","users.id")
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.*', 'roles.name as role_name')
            ->get();


            if($roles == "Admin"){
                
            }elseif($roles == "Admin"){
                /*$arr = DB::table("fleet_has_users")->where('user_id',$id)->get();

                $arr = json_decode(json_encode($arr), true);

                $fleet_id = $arr[0]['fleet_id'];

                $users = User::join("fleet_has_users","fleet_has_users.user_id","=","users.id")
                ->where("fleet_has_users.fleet_id", $fleet_id)
                ->get();*/
            }
           /* $arr = $users->toArray();
            $users = array();
            foreach($arr as $key=>$val){
                foreach($val as $k=>$v){
                    $users[$key][$k] = $v;
                }
            }
            */
            return view('user.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('user.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users,email',
            
        ]);
    
        $path = "";
        if ($request->hasFile('file')) {
    
            $folderPath = storage_path('app/public/images/');
            
            $name = $request->file('file')->getClientOriginalName();
            $extension = $request->file('file')->getClientOriginalExtension();
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            //$image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $name = uniqid() . '.'.$extension;
            $fullpath = $folderPath.$name;

            $path = 'public/images/'.$name;
            file_put_contents($fullpath, $image_base64);
        }
        $user = User::create([
            'name'          => $request->input('fname')." ".$request->input('lname'),
            'phone'         => $request->input('phone'),
            'address_line'  => $request->input('address_line'),
            'city'          => $request->input('city'),
            'state'         => $request->input('state'),
            'country'       => $request->input('country'),
            'pic'           => $path,
            'email'         => $request->input('email'),
            'password'      => Hash::make($request->input('password')),
            'long_desc'         => $request->input('long_desc')
        ]);
        $role = $request->input('role');
        $user->assignRole($role);
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::join("model_has_roles","model_has_roles.model_id","=","users.id")
        ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
        ->select('users.*', 'roles.name as role_name')
        ->where('users.id',$id)->get()->toArray();
        
        return Response::json($user);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $currentrole = DB::table("model_has_roles")->where('model_id',$id)->get()->toArray();
        $currentrole = json_decode(json_encode($currentrole), true);
        
        return view('user.edit',compact('user','roles', 'currentrole'));
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

        $user               = User::find($id);

        
        
        if($user->email != $request->input('email')){
            $this->validate($request, [
                'email' => 'required|unique:users,email',
            ]);
        }
        $path = "";
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

        
        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        $user->phone        = $request->input('phone');
        if($path != ""){
            $user->pic          = $path;
        }
        
        $user->address_line = $request->input('address_line');
        $user->city         = $request->input('city');
        $user->state        = $request->input('state');
        $user->country      = $request->input('country');
        $user->long_desc      = $request->input('long_desc');

        $user->save();
    
        $role = $request->input('role');

        DB::table('model_has_roles')
        ->where('model_id', $id)  
        ->update(array('role_id' => $role));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table("roles")->where('id',$id)->delete();
		
		
		$user = User::find( $id );
		$user->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}