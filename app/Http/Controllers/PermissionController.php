<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $permission;
	 
    public function __construct(Permission $permission)
    {
        $this->Permission = $permission;
    } 
	 
	 
	 /**
     * Api Protected Function
     *
     * @return json feed
     */
	
	protected function sendResult($message,$data,$errors = [],$status = true)
	{
	  $errorCode = $status ? 200 : 422;
	  $result = [
		  "message" => $message,
		  "status" => $status,
		  "data" => $data,
		  "errors" => $errors
	  ];
	  return response()->json($result,$errorCode);
	}
	 
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $name = strtolower(str_replace("_", " ", $request->input('name')));
        $permission = $this->Permission::create([
			'name' => $name,
			'guard_name' => $request->input('name'),
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$name = strtolower(str_replace("_", " ", $request->input('name')));
        $permission = $this->Permission::create([
			'name' => $name,
			'guard_name' => $request->input('name'),
		]);
    }

	/**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $errors = [];
	  $data = [];
	  $message = "";
	  $status = true;

	  $feed = DB::table('permissions') ->get();
		
		
		$token = "";
	  
	  if (empty($feed)) {
		  $status = false;
		  $errors = [
			  "login" => "something went wrong",
		  ];
		  $message = "something went wrong";
	  }else{
		  $message = "Successfully fetched data";
		  $data = [
			  'feed' => $feed
		  ];
	  }
	  return $this->sendResult($message,$data,$errors,$status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
