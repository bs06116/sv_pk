<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
    // return $request;
            $city     = strtolower($request->city);
            $minprice = $request->minprice;
            $maxprice = $request->maxprice;
            $type     = $request->type;
            $bedroom  = $request->bedroom;
            $minarea = $request->minarea;
            $maxarea = $request->maxarea;
            
                        $seller = Seller::latest()
                        ->when($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })
                        // ->when($purpose, function ($query, $purpose) {
                        //     return $query->where('purpose', '=', $purpose);
                        // })
                        ->when($bedroom, function ($query, $bedroom) {
                            return $query->where('bedroom', '=', $bedroom);
                        })
                        ->when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->when($minarea, function ($query, $minarea) {
                            return $query->where('area', '>=', $minarea);
                        })
                        ->when($maxarea, function ($query, $maxarea) {
                            return $query->where('area', '<=', $maxarea);
                        })
                        ->paginate(10); 
                        // $type="Sale";
                            return view('list.search',compact('seller'));
                           
        
               }
}
