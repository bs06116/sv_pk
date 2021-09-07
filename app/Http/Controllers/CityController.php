<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Toastr;
use App\Models\ImageHelper;
use Illuminate\Support\Facades\Auth;
use DB;
class UserController extends Controller
{

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
}
