<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.viewagent');
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
        {
            $sale=new Agent;
            $sale->name=$request->name;
            $sale->email=$request->email;
            $sale->address=$request->address;
            $sale->city=$request->city;
            $sale->province=$request->province;
            $sale->image=$request->image;
            $sale->phone_num=$request->phone_num;
            $sale->price=$request->price;
            $sale->area=$request->area;
            $sale->garage=$request->garage;
            $sale->date=$request->date;
            $sale->bedroom=$request->bedroom;
            $sale->Bath=$request->Bath;
            $sale->description=$request->description;
            $sale->type=$request->type;
            $sale->purpose=$request->purpose;
            
        $sale->save();
        toastr()->success('added');
        return redirect()->back();
        }
        // agent::create($request->all());
        // toastr()->success('added');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
