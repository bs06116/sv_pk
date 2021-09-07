
@extends('layout')
@section('title')
CREATE ADMIN
@endsection
@section('content')
<div class="page-content-wrapper ">

  <div class="container-fluid">

      <div class="row" style="width: 100%;">
        @if(Auth::check())
        @if(Auth::user()->type=='admin')
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                    @php
                    $count=App\Models\Seller::where('type','=','sale')->count();

                    @endphp
                    
                      <span class="counter">{{ $count }}</span>
                      Sales Properties
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                    @php
                    $count=App\Models\Seller::where('type','=','rent')->count();

                    @endphp
                      <span class="counter">{{$count}}</span>
                      Rent Properties
                  </div>
              </div>
          </div>
           <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                    @php
                    $count=App\Models\Seller::where('type','=','lease')->count();

                    @endphp
                      <span class="counter">{{$count}}</span>
                  Lease Properties
                  </div>
              </div>
          </div> 
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                    @php
                    $count=App\Models\Seller::where('type','=','rent')->orwhere('type','=','sale')
                    ->orwhere('type','=','lease')->count();
                 
                    @endphp
                      <span class="counter">{{$count}}</span>
                  All Properties
                  </div>
              </div>
          </div> 
          @elseif(Auth::user()->type=='agent')
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','sale')->where('user_id',$id)->count();

                  @endphp
                  {{-- <h4>Total Property Find is: <span class="theme-cl">{{ $count }}</span></h4> --}}
                    <span class="counter">{{ $count }}</span>
                    Sales Properties
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','rent')->where('user_id',$id)->count();

                  @endphp
                    <span class="counter">{{$count}}</span>
                    Rent Properties
                </div>
            </div>
        </div>
         <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','lease')->where('user_id',$id)->count();

                  @endphp
                    <span class="counter">{{$count}}</span>
                Lease Properties
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('user_id','=',$id)->count();
                 
                  @endphp
                    <span class="counter">{{$count}}</span>
                All Properties
                </div>
            </div>
        </div>
        @elseif(Auth::user()->type=='seller')
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','sale')->where('user_id',$id)->count();

                  @endphp
                  {{-- <h4>Total Property Find is: <span class="theme-cl">{{ $count }}</span></h4> --}}
                    <span class="counter">{{ $count }}</span>
                    Sales Properties
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','rent')->where('user_id',$id)->count();

                  @endphp
                    <span class="counter">{{$count}}</span>
                    Rent Properties
                </div>
            </div>
        </div>
         <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('type','=','lease')->where('user_id',$id)->count();

                  @endphp
                    <span class="counter">{{$count}}</span>
                Lease Properties
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="mini-stat clearfix bg-primary">
                <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                <div class="mini-stat-info text-right text-white">
                  @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('user_id','=',$id)->count();
                 
                  @endphp
                    <span class="counter">{{$count}}</span>
                All Properties
                </div>
            </div>
        </div>
        @endif
         @else
        @endif


      </div>



  </div>

</div>
@endsection