<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ImageHelper;
use App\Models\User;

class AdsController extends Controller
{
    public function index()
    {
         return view('agent.ads');
    }

    public function store(Request $request)
    {
        $id=Auth::user()->id;
        {
            $ads=new Ads;
            $ads->url=$request->url;
            $ads->image=$request->image;
            $ads->user_id=$id;
            // return $ads;
           
        $ads->save();
        toastr()->success('added');
        return redirect()->back();
        }
    }
}
