<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard</title>
    <meta content="Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/jpg" href="{{asset('assets/img/webtop.jpeg')}}"/>
    <link href="{{ asset('new/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('new/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('new/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link href="{{ asset('new/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('new/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('new/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('new/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <style>
   .action-div ul {
    padding: 5px !important;
    list-style: none !important;
    display: flex !important;
    justify-content: space-between !important;
    margin-bottom: 1px !important;
}
   .action-div ul li button, .action-div ul li a {
    padding: 5px 10px;
    font-size: 10px;
}
   .action-div ul li button {
       padding: 5px;
       font-size: 10px;
   }
   form.form-inline {
    padding-bottom: 10px;
}
    .action-div ul li button{
            background: #1b1a2f;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff !important;
    border :#1b1a2f !important;
    }
   .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #1b1a2f;
    border-color: #1b1a2f;
}
   .btn-primary {
    color: #fff;
    background-color: #1b1a2f;
    border-color: #1b1a2f;
}
   .btn-danger {
    color: #fff;
    background-color: #e6140e;
    border-color: #e6140e;
}
    .current {
     color: green;
   }
   #pagin{
           padding: 0px;
       margin: 50px 0px 0px;
   }
   #pagin li {
     display: inline-block;
     
   }
   #pagin li a.current{
       text-align: center;
       vertical-align: middle;
       background: #8a6d3b;
       padding: 5px 12px;
       color: #fff;
   }
   #pagin li a{
       text-align: center;
       vertical-align: middle;
       background: #80808038;
       padding: 5px 12px;
       color: #000;
   }



    .action-div{
       border: 1px solid #747474;
    border-radius: 0px 0px 5px 5px;
    box-shadow: -3px 2px 19px 0px rgb(85 83 83 / 75%);
    }
    .nav-user img {
    height: 37px;
    width: 36px;
    margin-bottom: 29px !important;
}
    .action-div ul {
                padding: 20px;
    list-style: none;
    display: flex;
    justify-content: space-between;
    }
    .action-div ul li>a{
            background: #1b1a2f;
    padding: 5px 10px;
    border-radius: 3px;
    color: #fff !important;
    display: flex;
    }
    .heading{
            background: #1b1a2f;
    padding: 10px;
    border-radius: 12px;
    margin-bottom: 40px;
    }
    .heading h3{
        color:#fff;
        font-size: 16px;
    }
    #sidebar-menu>ul>li>a{
    padding:10px 25px !important;
}
    .topbar .navbar-custom ul:first-child{
            display: flex;
    padding: 13px 0px;
    }
   .topbar .navbar-custom ul:first-child .sellproperty a{
                    background: #fff;
    padding: 6px 20px;
    color: #1b1a2f !important;
    border-radius: 24px;
    }
    .topbar .navbar-custom ul:first-child .sellproperty{
        margin-top: 10px;
    }
    hr {
    margin-top: 0rem !important;

}

</style>
</head>

<body class="fixed-left">

  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner"></div>
    </div>
  </div>

  <!-- Begin page -->
  <div id="wrapper"style=" overflow: auto;">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
      <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
      </button>

      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center">
          <!--<a href="index.html" class="logo">Admiry</a>-->
          {{-- <a href="" class="logo"><img src="{{asset('new/assets/img/admin.jpeg')}}" height="32" alt="logo"></a> --}}
       </div>
      </div>

      <div class="sidebar-inner slimscrollleft">

        <div class="user-details" style="padding: 8px;">
          <div class="text-center">
            <img src="{{Auth::user()->image}}" alt="" class="rounded-circle"style="height: 39px;width: 43px;">
             
          </div>
          <div class="user-info">
              <a href="{{route('profile')}}" style="color:#fff;font-size: 12px;">(Edit profile)</a>
          <h4 class="font-16"style=" margin-top: 0px;">{{ucfirst(Auth::user()->name)}}({{ucfirst(Auth::user()->type)}})</h4>


             </span>
          </div> 
        </div>
        <hr style="width: 233px;height: -13px;background: aliceblue;">
        <div id="sidebar-menu">
          <ul>
              <li>
                  <a href="{{route('dashboard')}}" class="waves-effect">
                      <i class="fa fa-tachometer" aria-hidden="true"></i>
                      <span style="color: white"> Dashboard</span>
                       {{-- {{-- <span class="badge badge-primary pull-right"></span> --}}
                  </a>
              </li>
              @if (Auth::user()->type=='admin')
              {{-- <li>
                <a href="{{route('addagent')}}" class="waves-effect">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <span>Add Estate Agent </span>
                </a>
            </li> --}}
            <li>
              <a href="{{route('agent.index')}}" class="waves-effect">
                <i class="fa fa-users" aria-hidden="true"></i>
                  <span>View Estate Agents <span class="badge badge-primary pull-right"></span></span>
              </a>
          </li>  
              <li>
                  <a href="{{route('buyer.index')}}" class="waves-effect">
                    <i class="fa fa-users" aria-hidden="true"></i>
                      <span>View Buyers <span class="badge badge-primary pull-right"></span></span>
                  </a>
              </li>
              
            
              <li>
                <a href="{{route('seller.index')}}" class="waves-effect">
                  <i class="fa fa-users" aria-hidden="true"></i>
                    <span>View Private Sellers <span class="badge badge-primary pull-right"></span></span>
                </a>
            </li>
            <li>
              <a href="{{route('property.index')}}" class="waves-effect">
                <i class="fa fa-building" aria-hidden="true"></i>
                  <span>Sellers Properties <span class="badge badge-primary pull-right"></span></span>
              </a>
          </li>
          
          <li>
            <a href="{{route('agentproperty')}}" class="waves-effect">
              <i class="fa fa-building" aria-hidden="true"></i>
              <span>Estate Agent Properties </span></a>
        </li><br><br><br>
          <!--<li>-->
          <!--  <a href="{{url('/')}}" class="waves-effect">-->
          <!--    <i class="fa fa-home" aria-hidden="true"></i>-->
          <!--      <span>Home <span class="badge badge-primary pull-right"></span></span>-->
          <!--  </a>-->
        <!--</li>-->
        
          @elseif (Auth::user()->type=='seller')
          <li>
            <a href="{{url('/')}}" class="waves-effect">
              <i class="fa fa-home" aria-hidden="true"></i>
                <span>Home <span class="badge badge-primary pull-right"></span></span>
            </a>
        </li>
          <li>
            <a href="{{route('addproperty')}}" class="waves-effect">
              <i class="fa fa-plus" aria-hidden="true"></i>
                <span> Add Properties <span class="badge badge-primary pull-right"></span></span>
            </a>
        </li>
        <hr style="width: 233px;height: -13px;background: aliceblue;">
        <li>
              <a href="{{route('viewproperty')}}" class="waves-effect">
            <i class="fa fa-building" aria-hidden="true"></i>
              <span>My Properties <span class="badge badge-primary pull-right"></span></span>
          </a>
      </li>
      <!--<li>-->
      <!--    <a href="{{route('property.index')}}" class="waves-effect">-->
      <!--      <i class="fa fa-building" aria-hidden="true"></i>-->
      <!--        <span>My Properties <span class="badge badge-primary pull-right"></span></span>-->
      <!--    </a>-->
      <!--</li>-->
      @elseif (Auth::user()->type=='agent')
      <li>
        <a href="{{url('/')}}" class="waves-effect">
          <i class="fa fa-home" aria-hidden="true"></i>
            <span>Home <span class="badge badge-primary pull-right"></span></span>
        </a>
    </li>
      <li>
        <a href="{{route('viewagentproperty')}}" class="waves-effect">
          <i class="fa fa-building" aria-hidden="true"></i>
            <span> My Properties <span class="badge badge-primary pull-right"></span></span>
        </a>
    </li>
    <hr style="width: 233px;height: -13px;background: aliceblue;">
     <li>
        <a href="#" class="waves-effect">
       <i class="fa fa-phone" aria-hidden="true"></i>
            <span> Phone :<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ucfirst(Auth::user()->number)}}</span>
        </a>
    </li>
     <li>
        <a href="#" class="waves-effect">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span> Email:<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{ucfirst(Auth::user()->email)}}</span>
        </a>
    </li>
    <hr style="width: 233px;height: -13px;background: aliceblue;">
    <h5 style="color: aliceblue;padding-left: 17px;font-size: 16px;">Advertisement </h5>
    <li>
      <a href="{{route('ads')}}" class="waves-effect">
          <i class="mdi mdi-view-dashboard"></i>
          <span>Right Side Banner<span class="badge badge-primary pull-right"></span></span>
      </a>
  </li>
    <li>
    <a href="#" class="waves-effect infoTextss">
        <i class="mdi mdi-view-dashboard"></i>
        <span>Main Banner<span class="badge badge-primary pull-right"></span></span><br><br>
        <p class="sizeTextss"
style="color: #83693b; text-align: center;display: none;">For main banner Advertisement Please contact with administrator</p>
    </a>
</li>
 <hr style="width: 233px;height: -13px;background: aliceblue;">

<!--<li>-->
<!--      <a href="{{route('viewagentproperty')}}" class="waves-effect">-->
<!--        <i class="fa fa-building" aria-hidden="true"></i>-->
<!--          <span>My Properties <span class="badge badge-primary pull-right"></span></span>-->
<!--      </a>-->
<!--  </li>-->
<!--    <li>-->
<!--      <a href="{{ route('profile') }}" class="waves-effect">-->
<!--        <i class="fa fa-cog" aria-hidden="true"></i>-->
<!--          <span>Profile Setting <span class="badge badge-primary pull-right"></span></span>-->
<!--      </a>-->
<!--  </li>-->
<!-- <li>-->
<!--    <a href="" class="waves-effect">-->
     
<!--        <span>Estate Agent Pakage is Dimond <span class="badge badge-primary pull-right"></span></span>-->
<!--    </a>-->
<!--</li>-->
 <li>
    <h5><span style="color:white;font-size:25px"> &nbsp Free Trial</span></h5>
<p><span style="color:#8a6d3b;font-size:25px ">&nbsp Current Plan</span></p>
</li>
  <button class="infoTexts" style="
  margin-left: 59px;
 padding: 10px 30px;
  border-radius: 14px;
  background: transparent;
  border: 2px solid #fff;
  color: white;
">Renew</button><br><br><p class="sizeTexts"
style="color: #83693b; text-align: center;display: none;">For Package Renewal Please contact with administrator</p>
<p style="color:white;margin-left: 93px;">OR</p>
<button class="infoText" style="
 margin-left: 27px;
 padding: 10px 30px;
  border-radius: 14px;
  background: #83693b;
  border: 2px solid #fff;
  color: white;
">Upgrade Package</button>
<br><br><p class="sizeText"
style="color: #83693b; text-align: center;display: none;">For upgrade your Package Please contact with administrator</p>
<br><br><br><br><br><br>

       @endif
       
          </ul>
         
      </div>
        
        <div class="clearfix"></div>
        
      </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        
      <!-- Start content -->
      <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

          <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                @if (Auth::user()->type=='admin')
                

              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                  role="button" aria-haspopup="false" aria-expanded="false">
                  <img src={{Auth::user()->image}} alt="user" class="rounded-circle" style="margin-bottom: 26px;">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  <a class="dropdown-item" href="{{url('/')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Home</a>
                  <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                  <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                   <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                  <a class="dropdown-item" href="{{route('user.logout')}}"><i
                      class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
                
              </li>
              
              
              @elseif (Auth::user()->type=='agent')
              <li class="sellproperty">
                <span><a href="{{route('addagentproperty')}}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp<b>Add Property</b></a></span> 
                </li>

              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                  role="button" aria-haspopup="false" aria-expanded="false">
                  <img src={{Auth::user()->image}} alt="user" class="rounded-circle" style="margin-bottom: 26px;">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                  
                  
                  <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                   <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                  <a class="dropdown-item" href="{{route('user.logout')}}"><i
                      class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
                
              </li>
             @endif
            </ul>
            

            <ul class="list-inline menu-left mb-0">
              <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                  <i class="ion-navicon"></i>
                </button>
              </li>
              <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title">Dashboard >> My Properties</h3>
              </li>
            </ul>
            

            

          </nav>

        </div>                    <!------ Include the above in your HEAD tag ---------->
         <div class="container">
            <form class="form-inline" action="">
                                
                <div class="form-group pl-3"> 
                    <label class="select" >Property Type</label>
                   @php
                  $id=Auth::user()->id;
                  $sale=App\Models\Seller::where('type','=','sale')->where('user_id',$id)->count();
                  @endphp
                                @php
                  $id=Auth::user()->id;
                  $rent=App\Models\Seller::where('type','=','rent')->where('user_id',$id)->count();
                  @endphp
                                    @php
                  $id=Auth::user()->id;
                  $lease=App\Models\Seller::where('type','=','lease')->where('user_id',$id)->count();
                  @endphp
                    <select  style="background-color:#303142;color:#fff;margin-left:10px;border-radius: 15px;"  class="form-control" placeholder="" id="type">
                        <option value=""> Select Type</option>
                        <option value="sale"> Sale ({{ $sale }})</option>
                        <option value="rent"> Rent ({{ $rent }})</option>
                        <option value="lease"> Lease ({{ $lease }})</option>
                    </select>    
                </div>
                
                <div class="form-group pl-3"> 
                    <label class="select" >Property Purpose</label>
                    @php
                  $id=Auth::user()->id;
                  $home=App\Models\Seller::where('property','=','home')->where('user_id',$id)->count();
                  @endphp
                  @php
                  $id=Auth::user()->id;
                  $commercial=App\Models\Seller::where('property','=','commercial')->where('user_id',$id)->count();
                  @endphp
                  @php
                  $id=Auth::user()->id;
                  $land=App\Models\Seller::where('property','=','land')->where('user_id',$id)->count();
                  @endphp
                    <select  style="background-color:#303142;color:#fff;margin-left:10px;border-radius: 15px;"  class="form-control" placeholder="" id="property">
                        <option value=""> Select Type</option>
                        <option value="home"> Home ({{$home}})</option>
                        <option value="commercial"> Commercial ({{$commercial}})</option>
                        <option value="land"> Land ({{$land}})</option>
                    </select>    
                </div>
              <div class="form-group pl-3"> 
                <label class="select" >Price </label>
 @php
                  $id=Auth::user()->id;
                  $count=App\Models\Seller::where('status','=','agent')->where('user_id',$id)->count();
                  @endphp
                
                <select  style="background-color:#303142;color:#fff;margin-left:10px;border-radius: 15px;"  class="form-control" placeholder="" id="price">
                    <option value=""> Select Price </option>
                    <option value="minprice">Lowest Price ({{$count}})</option>
                    <option value="maxprice">Highest Price ({{$count}})</option>
                </select>    
            </div>    
        </form>
      </div>                                        
      <div class="view-agent-div">
        
        <div class="container overflow-auto">
          <div class="row" style="width: 100%; max-width: 90%;" id="mainContainer">
            @php
              $sellers=App\Models\Seller::where('user_id','=',Auth::user()->id)->get();
            @endphp   
            @foreach ($sellers as $key => $seller)
                <div class="col-lg-3">
                   
                      <div class="view-agent-info">
                          
                          <div class="img-div" style="margin-bottom: 20px;">
                              <img src="{{$seller->image}}" class="img-fluid"/>
                              <div class="action-div">
                              <ul>
                                  <li>
                                      
                                      <form action="{{route('seller.show',$seller->id)}}" method="post">
                                                      @csrf
                                                      @method('GET')
                                                        <button class="btn btn-danger"style="background-color: #1b1a2f;">Details</button>
                                                </form> 
                                  </li>
                                  <li>
                                      <a href="{{route('seller.edit',$seller->id)}}"class="btn btn-danger" style="background-color: #1b1a2f;">Edit</a>
                                  </li>
                                  <li>
                                      <form action="{{route('seller.destroy',$seller->id)}}" method="POST">
                                                      @method('DELETE')
                                                      @csrf
                                                      <button class="btn btn-danger" style="background-color: #1b1a2f;">Delete</button>
                                                  </form>
                                  </li>
                                  <li>
                              
                                                  @if ($seller->enable == 0)
                                                  <a href="{{route('unfeature',$seller->id)}}">OFF</a>
                                                
                                                  @else
                                                  <a href="{{route('feature',$seller->id)}}">ON</a>
                                                  
                                                  @endif
                                          
                                      
                                  </li>
                              </ul>
                          </div>
                        </div>
                          </div>
                  </div>
            @endforeach
            
          </div>
      </div>
    <ul id="pagin">
         
</ul>
</div>
                                     
            </div> <!-- content -->

            <footer class="footer">
                © 2021 Shinny View Limited. All rights reserved.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script>
    $('#type').on('change', function() {
      
      var typeVal = this.value;
      $.ajax({
        type: "post", 
        url: '{{ route('filter') }}',
            data: {type: typeVal},
            success:function(result){
              $('#mainContainer').html(result);  
              console.log(result);
            },
            error:function(err){
              console.log(err);
            }
        });
    });

    $('#property').on('change', function() {
    //   console.log(this.value);
            var propertyVal = this.value;
      $.ajax({
        type: "post", 
        url: '{{ route('filter') }}',
            data: {property: propertyVal},
            success:function(result){
              $('#mainContainer').html(result);  
              console.log(result);
            },
            error:function(err){
              console.log(err);
            }
        });
    });
    $('#price').on('change', function() {
      // console.log(this.value)/;
            var priceVal = this.value;
      $.ajax({
        type: "post", 
        url: '{{ route('filter') }}',
            data: {price: priceVal},
            success:function(result){
              $('#mainContainer').html(result);  
              console.log(result);
            },
            error:function(err){
              console.log(err);
            }
        });
    });
    </script>
    
    <script>
    $("button.infoText").click(function(){
        if($(".sizeText").css("display")=="block"){
            $(".sizeText").css("display","none");
        }
        else{
            $(".sizeText").css("display","block");
        }
    })
</script>
     <script>
    $("button.infoTexts").click(function(){
        if($(".sizeTexts").css("display")=="block"){
            $(".sizeTexts").css("display","none");
        }
        else{
            $(".sizeTexts").css("display","block");
        }
    })
</script>
  <script>
    $(".infoTextss").click(function(){
        if($(".sizeTextss").css("display")=="block"){
            $(".sizeTextss").css("display","none");
        }
        else{
            $(".sizeTextss").css("display","block");
        }
    })
</script>
    
    
    <script src="{{ asset('new/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/detect.js') }}"></script>
    <script src="{{ asset('new/assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('new/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('new/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('new/assets/js/waves.js') }}"></script>
    <script src="{{ asset('new/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('new/assets/js/jquery.scrollTo.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('new/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('new/assets/pages/dashborad.js') }}"></script>
    <!--Data tabel-->
    <script src="{{ asset('new/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('new/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('new/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    
<!--<script src="{{ asset('new/assets/js/easy-number-separator.js')}}"></script>-->
    <!-- Datatable init js -->
    <script src="{{ asset('new/assets/pages/datatables.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('new/assets/js/app.js') }}"></script>
    <script src="{{ asset('new/toastr/toastr.min.js') }}"></script>

</body>


</html>
