<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Toastr;
use App\Models\ImageHelper;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = [
           
	        'email' => ['required', 'max:255', 'email:rfc,dns', 'unique:users'],
        ];

        $this->validate($request, $rules);
        Session::flash('email','email has be send');
        User::create($request->all());
        toastr()->success('added');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view ('property-details')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('admin.editagent')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     * 
     */


    public function profileedit()
    {
        $id=Auth::user()->id;
        $user=User::where('id','=',$id)->get();
        return view('admin.profile',compact('user'));
    }


    public function update(Request $request, user $user)
    {
        $user->update($request->all());
        toastr()->success('Updated');
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        toastr()->success('Deleted');
        return redirect()->back();
    }
    public function block($id){
        $user = User::find($id);
        $user->update([
            'block'=>1,
        ]);
        toastr()->info(' Terminate','Done');
        return redirect()->back();
    }
    public function unblock($id){
        $user = User::find($id);
        $user->update([
            'block'=>0,
        ]);
        toastr()->info(' Active','Done');
        return redirect()->back();
    }
      public function register(Request $request)
    {
        $rules = [
           
            //'email'     => 'required|email|max:255|unique:users',
	        'email' => ['required', 'max:255', 'email:rfc,dns', 'unique:users'],
            'password'  => 'required|min:8',
        ];

        $this->validate($request, $rules);
        User::create($request->all());
        // return $request;
        toastr()->success('User Register');
        return redirect()->back();
    }
     public function unfeature($id){
        
        $user=User::where('id', $id)
              ->update(['status' => 1]);
        toastr()->info(' Agent ID Unblock ','Done');
        return redirect()->back();
    }
    public function feature($id){
        
       $user=User::where('id', $id)
              ->update(['status' => 0]);
              
        toastr()->info(' Agent ID block ','Done');
        return redirect()->back();
    }
    public function registeragent(Request $request)
    {
        $rules = [
           
	        'email' => ['required', 'max:255', 'email:rfc,dns', 'unique:users'],
            'password'  => 'required|min:8',
        ];

        $this->validate($request, $rules);
        User::create($request->all());
        return $request;
        toastr()->success('Agent Register');
        return redirect()->back();
    }
    function city()
    {
     $country_list = DB::table('country_state_city')
         ->groupBy('country')
         ->get();
     return view('agent.addagentproperty')->with('country_list', $country_list);
    }
    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('country_state_city')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
function cityseller()
    {
     $country_list = DB::table('country_state_city')
         ->groupBy('country')
         ->get();
     return view('seller.addproperty')->with('country_list', $country_list);
    }
    function fetchseller(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('country_state_city')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}



