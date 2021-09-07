<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\ImageHelper;
use App\Models\User;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Gallery;
use File;
use Monolog\Handler\IFTTTHandler;
use Toastr;


class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seller');
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
       
        $id=Auth::user()->id;
        
        $purchase_date = Auth::user()->updated_at; 
        $start_date= new SupportCarbon($purchase_date);
        $end_date = $start_date->copy()->addDays(30);
        
        $cur=\Carbon\Carbon::now();
        $diff = $start_date->diffInDays($cur);
        if($diff >= 30){
            $user = User::find($id);
            $user->updated_at = $end_date;
            $user->save();
        }

        if($diff <= 30){

            $ads = seller::where('user_id',$id)->where('updated_at','<=',$end_date)->where('updated_at','>=',$start_date)->count();
        
            if(Auth::user()->pakage > $ads && Auth::user()->type=='agent'){
                // $this->validate($request, [
                //     'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
                //     ]);
                if($request->has('video')){
                   
                    $file = $request->file('video');
                    $filename = $file->getClientOriginalName();
                    $path = public_path().'/images/';
                    $file->move($path, $filename);

                    // $rules=[
                    //     'video'=>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'];
                    //  $validator = Validator($rules);
              $seller=new seller;
              $seller->name=$request->name;
              $seller->email=$request->email;
              $seller->address=$request->address;
              $seller->city=$request->city;
              $seller->province=$request->province;
              $seller->image=$request->image;
              $seller->phone_num=$request->phone_num;
              $seller->price=$request->price;
              $seller->area=$request->area;
              $seller->garage=$request->garage;
              $seller->video=$filename;
            $seller->bedroom=$request->bedroom;
            $seller->Bath=$request->Bath;
            $seller->description=$request->description;
            $seller->type=$request->type;
            $seller->status=$request->status;
            $seller->size=$request->size;
            $seller->purpose=$request->purpose;
            $seller->property=$request->property;
            $seller->plot_number=$request->plot_number;
            $seller->user_id=$id;
            $seller->save();
            
                   }
                   else{
                    $seller=new seller;
                    $seller->name=$request->name;
                    $seller->email=$request->email;
                    $seller->address=$request->address;
                    $seller->city=$request->city;
                    $seller->province=$request->province;
                    $seller->image=$request->image;
                    $seller->phone_num=$request->phone_num;
                    $seller->price=$request->price;
                    $seller->area=$request->area;
                    $seller->garage=$request->garage;
                    // $seller->video=$filename;
                  $seller->bedroom=$request->bedroom;
                  $seller->Bath=$request->Bath;
                  $seller->description=$request->description;
                  $seller->type=$request->type;
                  $seller->status=$request->status;
                  $seller->size=$request->size;
                  $seller->purpose=$request->purpose;
                  $seller->plot_number=$request->plot_number;
                  $seller->property=$request->property;
                  $seller->user_id=$id;
                //   return $seller;
                  $seller->save();
                   }
                
             $gallary = $request->file('gallaryimage');
            
            if($gallary)
            {
                foreach($gallary as $images)
                {
                    $seller_id=$seller->id;
                    $currentDate = Carbon::now()->toDateString();
                    $galimage = 'gallary-'.$currentDate.'-'.uniqid().'.'.$images->getClientOriginalExtension();
                    $size = $images->getClientSize();
                   
                    $imagePath = 'property/gallery/'.$galimage;
                    $imagePathComplete = 'public/'.$imagePath;
                    $ip = $images->move(('property/gallery/'),$galimage);
                    // return $ip;
                    $propertyimage = Image::make($ip);
                    $propertyimage->resize(1024,720);
                    $propertyimage->insert(public_path('webtop.png'),'center',5, 5); 
                    $propertyimage->save(); 
                    $images_upload= new Gallery;
                    $images_upload->seller_id=$seller_id;
                    $images_upload->name=$galimage;
                    $images_upload->size=$size;
                    $images_upload->save();
                   
                }
            }
 
                  toastr()->success('Added Successfuly');
                  return redirect()->back();
            }
            elseif(Auth::user()->pakage > $ads && Auth::user()->type=='seller'){
                // $this->validate($request, [
                //     'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
                //     ]);
                if($request->has('video')){
                   
                    $file = $request->file('video');
                    $filename = $file->getClientOriginalName();
                    $path = public_path().'/images/';
                    // $rules=[
                    //     'video'=>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'];
                    //  $validator = Validator($rules);
              $seller=new seller;
              $seller->name=$request->name;
              $seller->email=$request->email;
              $seller->address=$request->address;
              $seller->city=$request->city;
              $seller->province=$request->province;
              $seller->image=$request->image;
              $seller->phone_num=$request->phone_num;
              $seller->price=$request->price;
              $seller->area=$request->area;
              $seller->garage=$request->garage;
              $seller->video=$filename;
            $seller->bedroom=$request->bedroom;
            $seller->Bath=$request->Bath;
            $seller->description=$request->description;
            $seller->type=$request->type;
            $seller->size=$request->size;
            $seller->status=$request->status;
            $seller->purpose=$request->purpose;
            $seller->property=$request->property;
            $seller->plot_number=$request->plot_number;
            $seller->user_id=$id;
            $seller->save();
            
                   }
                   else{
                    $seller=new seller;
                    $seller->name=$request->name;
                    $seller->email=$request->email;
                    $seller->address=$request->address;
                    $seller->city=$request->city;
                    $seller->province=$request->province;
                    $seller->image=$request->image;
                    $seller->phone_num=$request->phone_num;
                    $seller->price=$request->price;
                    $seller->area=$request->area;
                    $seller->size=$request->size;
                    $seller->garage=$request->garage;
                    // $seller->video=$filename;
                  $seller->bedroom=$request->bedroom;
                  $seller->Bath=$request->Bath;
                  $seller->description=$request->description;
                  $seller->type=$request->type;
                  $seller->status=$request->status;
                  $seller->purpose=$request->purpose;
                  $seller->property=$request->property;
                  $seller->plot_number=$request->plot_number;
                  $seller->user_id=$id;
                  $seller->save();
                   }
                
            
            $gallary = $request->file('gallaryimage');
            
            if($gallary)
            {
                foreach($gallary as $images)
                {
                    $seller_id=$seller->id;
                    $currentDate = Carbon::now()->toDateString();
                    $galimage = 'gallary-'.$currentDate.'-'.uniqid().'.'.$images->getClientOriginalExtension();
                    $size = $images->getClientSize();
                   
                    $imagePath = 'property/gallery/'.$galimage;
                    $imagePathComplete = 'public/'.$imagePath;
                    $ip = $images->move(('property/gallery/'),$galimage);
                    // return $ip;
                    $propertyimage = Image::make($ip);
                    $propertyimage->resize(1024,720);
                    $propertyimage->insert(public_path('webtop.png'),'center',5, 5); 
                    $propertyimage->save(); 
                    $images_upload= new Gallery;
                    $images_upload->seller_id=$seller_id;
                    $images_upload->name=$galimage;
                    $images_upload->size=$size;
                    $images_upload->save();
                   
                }
            }
 
            // Toastr::success('message', 'Property created successfully.');
            // return redirect()->route('agent.properties.index');
                  
                //   $seller->id;
                  toastr()->success('Added Successfuly');
                  return redirect()->back();
        }
            else{
              toastr()->error('Your Package in completly used Please upgrade your package');
                return redirect()->back();
              }
        }else{
            toastr()->error('Your package is expired Please renew it for furthur use.');
            return redirect()->back();
        }
        //   return $start_date;
        //   return $cur;
        // echo  $start_date->timestamp;

        

        
    }
//   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
       return view ('property-details')->with('seller',$seller);
         
                        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
    #    dd($seller);
        return view('agent.editproperty')->with('seller',$seller);
    }
     public function selleredit(Seller $seller)
    {
    #    return $seller;
        return view('seller.editproperty')->with('seller',$seller);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $seller->update($request->all());
        // return $request;
         $gallary = $request->file('gallaryimage');
            
            if($gallary)
            {
                foreach($gallary as $images)
                {
                    $seller_id=$seller->id;
                    $currentDate = Carbon::now()->toDateString();
                    $galimage = 'gallary-'.$currentDate.'-'.uniqid().'.'.$images->getClientOriginalExtension();
                    $size = $images->getClientSize();
                   
                    $imagePath = 'property/gallery/'.$galimage;
                    $imagePathComplete = 'public/'.$imagePath;
                    $ip = $images->move(('property/gallery/'),$galimage);
                    // return $ip;
                    $propertyimage = Image::make($ip);
                    $propertyimage->resize(1024,720);
                    $propertyimage->insert(public_path('webtop.png'),'center',5, 5); 
                    $propertyimage->save(); 
                    $images_upload= new Gallery;
                    $images_upload->seller_id=$seller_id;
                    $images_upload->name=$galimage;
                    $images_upload->size=$size;
                    $images_upload->save();
                   
                }
            }
        
        toastr()->success('Updated');
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();
        toastr()->success('Deleted');
        return redirect()->back();
    }

    public function city($city){
    
        $seller=Seller::where('city',$city)->get();
        return $seller;
    

    }
    public function search_home(Request $request){
        $city     = strtolower($request->city);#if($city==NULL){$city="";}
        $minprice = $request->minprice; #if($minprice==NULL){$minprice=0;}
        $maxprice = $request->maxprice;#if($maxprice==NULL){$maxprice=0;}
       // $type     = "sale";
        $bedroom  = $request->bedroom;#if($bedroom==NULL){$bedroom=0;}
        $purpose  = $request->purpose;if($purpose=="all"){$purpose=NULL;}
          $cat=$request->category;
        # return  "city".$city ."min price". $minprice ."max price". $maxprice  ."bed" .  $bedroom ."purpose". $purpose;
        // return $city;
           if($cat=="1"){
            $count = Seller::where('type','=','Sale')->when($city, function ($query, $city) {
                return $query->where('city', '=', $city);
            })
            ->when($purpose, function ($query, $purpose) {
                return $query->where('purpose', '=', $purpose);
            })
            ->when($bedroom, function ($query, $bedroom) {
                return $query->where('bedroom', '=', $bedroom);
            })
            ->when($minprice, function ($query, $minprice) {
                return $query->where('price', '>=', $minprice);
            })
            ->when($maxprice, function ($query, $maxprice) {
                return $query->where('price', '<=', $maxprice);
            })
            ->count();
                // return "fdsjf";
                   return $count;
           }
           if($cat=="2"){
                    $count = Seller::where('type','=','Rent')->latest()
                        ->when($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })
                        ->when($purpose, function ($query, $purpose) {
                            return $query->where('purpose', '=', $purpose);
                        })
                        ->when($bedroom, function ($query, $bedroom) {
                            return $query->where('bedroom', '=', $bedroom);
                        })
                        ->when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->count();
                        return $count;
           }
            if($cat=="3"){
                    $count = Seller::where('type','=','lease')->latest()
                        ->when($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })
                        ->when($purpose, function ($query, $purpose) {
                            return $query->where('purpose', '=', $purpose);
                        })
                        ->when($bedroom, function ($query, $bedroom) {
                            return $query->where('bedroom', '=', $bedroom);
                        })
                        ->when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->count();
                        return $count;
           }
    }
    public function search(Request $request){
    
        $city     = strtolower($request->city);
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $type     = $request->type;
        $bedroom  = $request->bedroom;
        $purpose  = $request->purpose;
        $cat=$request->category;
           if($cat=="1"){
             

            $count = Seller::where('type','=','Sale')->latest()
            ->when($city, function ($query, $city) {
                return $query->where('city', '=', $city);
            })
            ->when($purpose, function ($query, $purpose) {
                return $query->where('purpose', '=', $purpose);
            })
            ->when($bedroom, function ($query, $bedroom) {
                return $query->where('bedroom', '=', $bedroom);
            })
            ->when($minprice, function ($query, $minprice) {
                return $query->where('price', '>=', $minprice);
            })
            ->when($maxprice, function ($query, $maxprice) {
                return $query->where('price', '<=', $maxprice);
            })
            ->count();

                    $seller = Seller::where('type','=','Sale')->latest()
                    ->when($city, function ($query, $city) {
                        return $query->where('city', '=', $city);
                    })
                    ->when($purpose, function ($query, $purpose) {
                        return $query->where('purpose', '=', $purpose);
                    })
                    ->when($bedroom, function ($query, $bedroom) {
                        return $query->where('bedroom', '=', $bedroom);
                    })
                    ->when($minprice, function ($query, $minprice) {
                        return $query->where('price', '>=', $minprice);
                    })
                    ->when($maxprice, function ($query, $maxprice) {
                        return $query->where('price', '<=', $maxprice);
                    })
                    ->paginate(10000); 
                    // $type="Sale";
                        return view('search.propertyserch',compact('seller','count'));
                }        
    
           }
               
    public function lease(Request $request){
        // return "abc";
                $city     = strtolower($request->city);
                $minprice = $request->minprice;
                $maxprice = $request->mixprice;
                $type     = $request->type;
                $bedroom  = $request->bedroom;
                $purpose  = $request->purpose;
                $cat=$request->category;
                   if($cat=="3"){
                    $count = Seller::where('type','=','lease')->latest()
                    ->when($city, function ($query, $city) {
                        return $query->where('city', '=', $city);
                    })
                    ->when($purpose, function ($query, $purpose) {
                        return $query->where('purpose', '=', $purpose);
                    })
                    ->when($bedroom, function ($query, $bedroom) {
                        return $query->where('bedroom', '=', $bedroom);
                    })
                    ->when($minprice, function ($query, $minprice) {
                        return $query->where('price', '>=', $minprice);
                    })
                    ->when($maxprice, function ($query, $maxprice) {
                        return $query->where('price', '<=', $maxprice);
                    })
                    ->count();
        
                            $seller = Seller::where('type','=','lease')->latest()
                            ->when($city, function ($query, $city) {
                                return $query->where('city', '=', $city);
                            })
                            ->when($purpose, function ($query, $purpose) {
                                return $query->where('purpose', '=', $purpose);
                            })
                            ->when($bedroom, function ($query, $bedroom) {
                                return $query->where('bedroom', '=', $bedroom);
                            })
                            ->when($minprice, function ($query, $minprice) {
                                return $query->where('price', '>=', $minprice);
                            })
                            ->when($maxprice, function ($query, $maxprice) {
                                return $query->where('price', '<=', $maxprice);
                            })
                            ->paginate(10000); 
                            // $type="Sale";
                            // return $seller;
                                return view('search.propertyserch',compact('seller','count'));
                }        
    
           }
        
           public function rent(Request $request){
    
            $city     = strtolower($request->city);
            $minprice = $request->minprice;
            $maxprice = $request->maxprice;
            $type     = $request->type;
            $bedroom  = $request->bedroom;
            $purpose  = $request->purpose;
            $new=$request->new;
               if($new=="2"){
                   
                    $count = Seller::where('type','=','Rent')->latest()
                        ->when($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })
                        ->when($purpose, function ($query, $purpose) {
                            return $query->where('purpose', '=', $purpose);
                        })
                        ->when($bedroom, function ($query, $bedroom) {
                            return $query->where('bedroom', '=', $bedroom);
                        })
                        ->when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->count();
                        $seller = Seller::where('type','=','Rent')->latest()
                        ->when($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })
                        ->when($purpose, function ($query, $purpose) {
                            return $query->where('purpose', '=', $purpose);
                        })
                        ->when($bedroom, function ($query, $bedroom) {
                            return $query->where('bedroom', '=', $bedroom);
                        })
                        ->when($minprice, function ($query, $minprice) {
                            return $query->where('price', '>=', $minprice);
                        })
                        ->when($maxprice, function ($query, $maxprice) {
                            return $query->where('price', '<=', $maxprice);
                        })
                        ->paginate(10000); 
                        // $type="Sale";
                            return view('search.propertysearchrent',compact('seller','count'));
                    }        
        
               }
                public function cits(Request $request){
    
                $city     = strtolower($request->city);
                
                $new=$request->new;
                   if($new=="2"){
                       $count = Seller::where($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        })->count(); 
                             $seller = Seller::where($city, function ($query, $city) {
                            return $query->where('city', '=', $city);
                        }) ->paginate(10); 
                            // $type="Sale";
                                return view('search.propertyserchcits',compact('seller','counter'));
                        }        
            
                   }
    public function allproperty($user_id){
        $seller=Seller::where('user_id',$user_id)->get();
        return view('allproperty',compact('seller'));
    }
    
  public function unfeature($id){
        
        $seller=Seller::where('id', $id)
              ->update(['enable' => 1]);
        toastr()->info(' Property Featured ','Done');
        return redirect()->back();
    }
    public function feature($id){
        
       $seller=Seller::where('id', $id)
              ->update(['enable' => 0]);
              
        toastr()->info(' Property UnFeatured ','Done');
        return redirect()->back();
    }
    
    public function dell_image($id){
        Gallery::find($id)->delete($id);
        return back();
    
    }
    public function filter(Request $request){
       
      $id=Auth::user()->id;
     $type=$request->type;
     $property=$request->property;
     $price=$request->price;

    //  return $request;
    //   $filter=Seller::where('purpose','=',$purpose)->where('user_id','=',$id)->get();
    if($price=='minprice' && $price!=null){
        $filter = Seller::orderBy('price','asc')->where('user_id','=',$id)->get();   
        $image = '';
      foreach($filter as $filter){
        $image .= '<div class="col-lg-3">
        <div class="view-agent-info">
            <div class="img-div" style="margin-bottom: 20px;">
                <img src="'.$filter->image.'" class="img-fluid"/>
        <div class="action-div">
                              <ul>
                                <li>
                                      
                                      <form action="'.route('seller.show',$filter->id).'" method="GET">
                                                
                                                        <button class="btn btn-danger"style="background-color: #1b1a2f;">More Details</button>
                                                </form>
                                  </li>
                                  <li>
                                      <a href="'.route('seller.edit',$filter->id).'"class="btn btn-danger" style="background-color: #1b1a2f;">Edit</a>
                                  </li>
                                  <li>
                                      <form action="'.route('seller.destroy',$filter->id).'" method="DELETE">
                                                     
                                                      
                                                      <button class="btn btn-danger" style="background-color: #1b1a2f;">Delete</button>
                                                  </form>
                                  </li>
                                  </ul>
                </div>
             </div>
        </div>
        </div>';

      }
      return $image;
    }

    if($price!=null && $price=='maxprice'){
        $filter = Seller::orderBy('price','DESC')->where('user_id','=',$id)->get();  
        $image = '';
      foreach($filter as $filter){
        $image .= '<div class="col-lg-3">
        <div class="view-agent-info">
            <div class="img-div" style="margin-bottom: 20px;">
                <img src="'.$filter->image.'" class="img-fluid"/>
        <div class="action-div">
                              <ul>
                                <li>
                                      
                                      <form action="'.route('seller.show',$filter->id).'" method="GET">
                                                
                                                        <button class="btn btn-danger"style="background-color: #1b1a2f;">More Details</button>
                                                </form>
                                  </li>
                                  <li>
                                      <a href="'.route('seller.edit',$filter->id).'"class="btn btn-danger" style="background-color: #1b1a2f;">Edit</a>
                                  </li>
                                  <li>
                                      <form action="'.route('seller.destroy',$filter->id).'" method"DELETE">
                                                     
                                                      
                                                      <button class="btn btn-danger" style="background-color: #1b1a2f;">Delete</button>
                                                  </form>
                                  </li>
                                  </ul>
                </div>
             </div>
        </div>
        </div>';

      }
      return $image; 
    }
   
    
 if($type!=null){   
  $filter = Seller::where('type', '=', $type)->where('user_id','=',$id)->get();
                            
$image = '';
foreach($filter as $filter){
$image .= '<div class="col-lg-3">
<div class="view-agent-info">
<div class="img-div" style="margin-bottom: 20px;">
<img src="'.$filter->image.'" class="img-fluid"/>
<div class="action-div">
                              <ul>
                                <li>
                                      
                                      <form action="'.route('seller.show',$filter->id).'" method="GET">
                                                
                                                        <button class="btn btn-danger"style="background-color: #1b1a2f;">More Details</button>
                                                </form>
                                  </li>
                                  <li>
                                      <a href="'.route('seller.edit',$filter->id).'"class="btn btn-danger" style="background-color: #1b1a2f;">Edit</a>
                                  </li>
                                  <li>
                                      <form action="'.route('seller.destroy',$filter->id).'" method"DELETE">
                                                     
                                                      
                                                      <button class="btn btn-danger" style="background-color: #1b1a2f;">Delete</button>
                                                  </form>
                                  </li>
                                  </ul>
                </div>
             </div>
        </div>
        </div>';

}
return $image;
}
    $filter = Seller::where('property', '=', $property)->where('user_id','=',$id)->get();
                            
    $image = '';
      foreach($filter as $filter){
        $image .= '<div class="col-lg-3">
        <div class="view-agent-info">
            <div class="img-div" style="margin-bottom: 20px;">
                <img src="'.$filter->image.'" class="img-fluid"/>
            <div class="action-div">
                              <ul>
                                <li>
                                      
                                      <form action="'.route('seller.show',$filter->id).'" method="GET">
                                                
                                                        <button class="btn btn-danger"style="background-color: #1b1a2f;">More Details</button>
                                                </form>
                                  </li>
                                  <li>
                                      <a href="'.route('seller.edit',$filter->id).'"class="btn btn-danger" style="background-color: #1b1a2f;">Edit</a>
                                  </li>
                                  <li>
                                      <form action="'.route('seller.destroy',$filter->id).'" method"DELETE">
                                                     
                                                      
                                                      <button class="btn btn-danger" style="background-color: #1b1a2f;">Delete</button>
                                                  </form>
                                  </li>
                                  </ul>
                </div>
             </div>
        </div>
        </div>';

      }
      return $image;
    }
    
     function citys()
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


