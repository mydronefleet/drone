<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sop;
use DB;

class SopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:sop-list|sop-create|sop-edit|sop-delete', ['only' => ['index','store']]);
         $this->middleware('permission:sop-create', ['only' => ['create','store']]);
         $this->middleware('permission:sop-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:sop-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sops = Sop::orderBy('id','DESC')->get();
        return view('sop.index',compact('sops'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sop.create');
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
            'email' => 'required|unique:users,email'
        ]);*/

       

        $name = $request->file('file')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/document');
    
        $sop = Sop::create([
            'title'                 => $request->input('doctitle'),
            'name'                  => $name,
            'document'              => $path
        ]);

        
        return redirect()->route('sops.index')
                        ->with('success','Sop created successfully');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sop = Sop::find($id);
        
    
        return view('sop.show',compact('sop'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sop = Sop::find($id);
        
        return view('sop.edit',compact('sop'));
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
            'org_name' => 'required'
        ]);*/
        $path = "";
        if ($request->hasFile('file')) {
    
            $name = $request->file('file')->getClientOriginalName();
 
            $path = $request->file('file')->store('public/document');
        }
        $sop = Sop::find($id);
        
        $sop->title             = $request->input('title');
        if($path != ""){
            $sop->name                          = $name;
            $sop->document                      = $path;
        }
        $sop->save();
    
         return redirect()->route('sops.index')
                        ->with('success','Sop updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("sops")->where('id',$id)->delete();
        return redirect()->route('sops.index')
                        ->with('success','Sop deleted successfully');
    }
}
