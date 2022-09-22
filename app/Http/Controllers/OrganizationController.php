<?php
    
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Organization;
use App\Models\GroupLeaders;
use Response;
use DB;
    
class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:organization-list|organization-create|organization-edit|organization-delete', ['only' => ['index','store']]);
         $this->middleware('permission:organization-create', ['only' => ['create','store']]);
         $this->middleware('permission:organization-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:organization-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organizations = Organization::orderBy('id','DESC')->paginate(5);
        $leaders = GroupLeaders::orderBy('id','DESC')->get();
        return view('organization.index',compact('organizations', 'leaders'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('organization.create',compact('permission'));
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
            'name' => 'required'
        ]);
    
        $organization = GroupLeaders::create([
            'org_id'            => 1,
            'group_type'        => $request->input('group_type'),
            'address_line'     => $request->input('address_line'),
            'address_line2'     => $request->input('address_line2'),
            'city'              => $request->input('city'),
            'state'             => $request->input('state'),
            'country'           => $request->input('country'),
            'zipcode'          => $request->input('zip_code'),
            'name'              => $request->input('name'),
            'contact'         => $request->input('contact')
        ]);
        
        
        return redirect()->route('organizations.index')
                        ->with('success','Group Leader created successfully');
    }

    public function show($id)
    {
        $organization = Organization::find($id)->toArray();
        
    
        return Response::json($organization);
    }

    public function leadershow($id)
    {
        $leader = GroupLeaders::find($id)->toArray();
        
    
        return Response::json($leader);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organization = Organization::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('organization.edit',compact('organization'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function leaderedit($id)
    {
        $leader = GroupLeaders::find($id);
        
    
        return view('organization.editleader',compact('leader'));
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
            'org_name' => 'required'
        ]);

        $path = "";
        
    
        if ($request->hasFile('file')) {
    
            $name = $request->file('file')->getClientOriginalName();
 
            $path = $request->file('file')->store('public/images');
        }
    
        $organization = Organization::find($id);
        
        $organization->org_name             = $request->input('org_name');
        $organization->address_line1        = $request->input('address_line1');
        $organization->address_line2        = $request->input('address_line2');
        $organization->city                 = $request->input('city');
        $organization->state                = $request->input('state');
        $organization->country              = $request->input('country');
        $organization->zip_code             = $request->input('zip_code');
        if($path != ""){
            $organization->pic                      = $path;
        }
        $organization->poc_name             = $request->input('poc_name');
        $organization->poc_email            = $request->input('poc_email');
        $organization->poc_phone            = $request->input('poc_phone');
        $organization->short_desc           = $request->input('short_desc');


        $organization->save();
    
         return redirect()->route('organizations.index')
                        ->with('success','Organization updated successfully');
    }



    public function updateleader(Request $request, $id)
    {
        
        $leader = GroupLeaders::find($id);
        
        $leader->name             = $request->input('name');
        $leader->group_type       = $request->input('group_type');
        $leader->address_line     = $request->input('address_line');
        $leader->city             = $request->input('city');
        $leader->state            = $request->input('state');
        $leader->country          = $request->input('country');
        $leader->zipcode         = $request->input('zipcode');
        $leader->contact          = $request->input('contact');

        $leader->save();
    
         return redirect()->route('organizations.index')
                        ->with('success','Group Leader updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("group_leaders")->where('id',$id)->delete();
        return redirect()->route('organizations.index')
                        ->with('success','Role deleted successfully');
    }
}