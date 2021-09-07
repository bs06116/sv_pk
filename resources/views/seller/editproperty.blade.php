<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('new/assets/images/favicon.ico') }}">
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
    #sidebar-menu>ul>li>a{
    padding:10px 25px !important;
}
    .topbar .navbar-custom ul:first-child{
            display: flex;
    padding: 20px 0px;
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
    button#\32 04 {
    height: 24px;
    width: auto;
    border-color: #f7f7f7;
}
.addPropertyDiv{
        width:100% !important;
    }
        .container {
    width: 1050px;
}
.form-grouppppp {
    margin-top: 25px;
}
.gallery{
        padding: 10px 20px;
    width: 100%;
    max-width: 93%;
    margin: auto;
    margin-bottom: 20px;
}
.gallery .s6{
    display: flex;
    justify-content: center;
    align-items: center;
}
.gallery{
    border:1px solid;
}
.gallery .fa-times:before{
    position: relative;
    left: 0px;
    top: 15px;
    color: #000;
}
.uploadImg{
        background: #1b1a2f;
    color: #fff;
    padding: 5px 20px;
    border-radius: 50px;
}
.commercialList,.plotList,.homeList,.mainList{
    display: none;
}
li{
    list-style: none;
}
.purposeSelect{
    z-index: 99999999 !important;
}
.purposeSelect:hover .mainList{
    display: block;
}
.purposeSelect li>a{
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    width: 100%;
    text-decoration: none;
}
.mainList {
    position: absolute;
    z-index: 9999;
    background: #fff;
    width: 100%;
    padding: 15px;
    left: 0;
    top: 0;
    margin-top: 21px;
}
.homeList,.plotList,.commercialList{
    position: absolute;
    margin-left: 100px;
    top: 15px;
    background: #fff;
    width: 100%;
    padding: 0px 0px 0px 10px;
}
.homeType:hover .homeList{
    display: block
}
.plotType:hover .plotList{
    display: block;
}
.commercialType:hover .commercialList{
    display: block;
}
.commercialList{
    top: 53px;
}
.plotList{
    top: 35px;
}

.gallery-image-edit img {
    width: 45px;
}
.gallery-image-edit button {
    display: none;
}
.gallery-image-edit{
    width: 100%;
    max-width: 90%;
    margin: auto;
}
.gallery .gallery-image-edit{
    width: auto;
        margin: 0px;
        position:relative;
}
.gallery .gallery-image-edit img {
    width: 45px;
    margin: 0px 8px;
    height: 35px;
}
@media only screen and (max-width: 992px) {
  .table fieldset .form-group label{
    width:100%;
    max-width:100%;
    margin-bottom:10px;
    text-align: left !important;
  }
  .table .inputGroupContainer{
      max-width:100% !important;
  }
}
@media only screen and (max-width: 768px) {
    .form-group p{
        margin-top:50px;
    }
.addPropertyDiv {
    width: 100% !important;
    max-width: 100%;
    padding: 0;
    margin: 0;
}
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
        <!--  <li>-->
        <!--    <a href="{{route('addproperty')}}" class="waves-effect">-->
        <!--      <i class="fa fa-plus" aria-hidden="true"></i>-->
        <!--        <span> Add Properties <span class="badge badge-primary pull-right"></span></span>-->
        <!--    </a>-->
        <!--</li>-->
        <hr style="width: 233px;height: -13px;background: aliceblue;">
        <li>
              <a href="{{route('viewproperty')}}" class="waves-effect">
            <i class="fa fa-building" aria-hidden="true"></i>
              <span>My Properties <span class="badge badge-primary pull-right"></span></span>
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
      <a href="#" class="waves-effect">
          <i class="mdi mdi-view-dashboard"></i>
          <span>Main Banner<span class="badge badge-primary pull-right"></span></span>
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
      <h5><span style="color:white;font-size:25px"> &nbsp Diamond</span></h5>
<p><span style="color:#8a6d3b;font-size:25px">&nbsp Current Plan</span></p>
  </li>
  <button style="
    margin-left: 59px;
   padding: 10px 30px;
    border-radius: 14px;
    background: transparent;
    border: 2px solid #fff;
    color: white;
">Renew</button>
  <br><br><p style="color:white;margin-left: 93px;"><b>OR</b></p>
  <button style="
   margin-left: 27px;
   padding: 10px 30px;
    border-radius: 14px;
    background: #83693b;
    border: 2px solid #fff;
    color: white;
">Upgrade Pakage</button>
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
                  <!--<a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>-->
                  <!--<a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>-->
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
                 
                  <!--<a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>-->
                   <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                  <a class="dropdown-item" href="{{route('user.logout')}}"><i
                      class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
                
              </li>
                  @elseif (Auth::user()->type=='seller')
              <li class="sellproperty">
                <span><a href="{{route('addproperty')}}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp<b>Add Property</b></a></span> 
                </li>

              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                  role="button" aria-haspopup="false" aria-expanded="false">
                  <img src={{Auth::user()->image}} alt="user" class="rounded-circle" style="margin-bottom: 26px;">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                 
                  <!--<a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>-->
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
                <h3 class="page-title">Dashboard</h3>
              </li>
            </ul>

            

          </nav>

        </div>
                                            <!------ Include the above in your HEAD tag ---------->
                                                <div class="container addPropertyDiv">
                                                    <table class="table table-striped table-responsive">
                                                      <tbody>
                                                        <form method="post" action="{{ route('seller.update',$seller->id) }}"
                                                            enctype="multipart/form-data">
                                                            @method('PUT')
                                                            {{ csrf_field() }}
                                                         <tr>
                                                            
                                                            <td colspan="1">
                                                                <fieldset>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Title of Property <span style="color:red;">*</span></label>
                                                                      <input name="status" type="hidden"value="seller"id="example-date-input">
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-font" aria-hidden="true"></i></span><input required name="name" placeholder="Title of Property" class="form-control" required="true" value="{{$seller->name}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Phone Number</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="phone_num" placeholder="Phone Number" class="form-control"  value="{{$seller->phone_num}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Province</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
                                                                          <select class="form-control" name="province"value="province">

                                                                               <option name="province" value="">Select Province </option>
                                                                              
                                                                              <option value="Federal"@php if($seller->province=="Islamabad"){echo "selected";} @endphp>Federal</option>
                                                                               <option value="Punjab"@php if($seller->province=="Punjab"){echo "selected";} @endphp>Punjab</option>
                                                                               <option value="KPK"@php if($seller->province=="KPK"){echo "selected";} @endphp>KPK</option>
                                                                               <option value="Sindh"@php if($seller->province=="Sindh"){echo "selected";} @endphp>Sindh</option>
                                                                               <option value="Balochistan"@php if($seller->province=="Balochistan"){echo "selected";} @endphp>Balochistan</option>
                                                                               <option value="Azad Kashmir"@php if($seller->province=="Azad Kashmir"){echo "selected";} @endphp>Azad Kashmir</option>
                                                                               
                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                       
                                                                       
                                                                      <label class="col-md-4 control-label">Property Type <span style="color:red">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                                           <select required class="form-control"value="Select Type" name="type">
                                                                                                <option name="type"value="{{$seller->type}}" >Select Type </option>                                                     
                                                                                                               <option value="Sale" @php if($seller->type=="sale"){echo "selected";} @endphp>Sale</option>
                                                                                                               <option value="Rent"@php if($seller->type=="rent"){echo "selected";} @endphp>Rent</option>
                                                                                                               <option value="Lease"@php if($seller->type=="lease"){echo "selected";} @endphp>Lease</option>
                                                                                                              
                                                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                    <div class="form-group">
                                                                      <label class="col-md-4 control-label">Price  <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                        <span class="wordAmount"></span>
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span><input required name="price" placeholder="Price"
                                                                         class="input-group numberInput" required="true" value="{{$seller->price}}" type="text">
                                                                            <input name="enable" type="hidden"value="0"id="example-date-input">
                                                                            
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                  <div class="form-group">
                                                                                                      <label class="col-md-4 control-label">Bedroom</label>
                                                                                                      <div class="col-md-8 inputGroupContainer">
                                                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-bed" aria-hidden="true"></i></span><input  name="bedroom" placeholder="Bedroom" class="form-control"  value="{{$seller->bedroom}}" type="text"></div>
                                                                                                      </div>
                                                                                                   </div>
                                                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group" >
                                                                    <label class="col-md-4 control-label">Bath</label>
                                                                    <div class="col-md-8 inputGroupContainer">
                                                                       <div class="input-group"><span class="input-group-addon"><i class="fa fa-bath" aria-hidden="true"></i></span><input  name="Bath" placeholder="Bath" class="form-control"  value="{{$seller->Bath}}" type="text"></div>
                                                                    </div>
                                                                 </div>
                                                                                                   <br>
                                                                                                   <br>
                                                                                                   <div class="form-group">
                                                                                                      <label class="col-md-4 control-label">Garage</label>
                                                                                                      <div class="col-md-8 inputGroupContainer">
                                                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span><input  name="garage" placeholder="Garage" class="form-control" value="{{$seller->garage}}" type="text"></div>
                                                                                                      </div>
                                                                      
                                                                      
                                                                                              </div>
                                                                  <br>
                                                                   <br>
                                                                    <div class="form-group">
                                                                      <!--<label class="col-md-4 control-label for="file" style="cursor: pointer;"">Featured Image</label>-->
                                                                      
                                                                      <!--<div class="col-md-8 inputGroupContainer">-->
                                                                      <!--   <div class="input-group"><span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></div>-->
                                                                    <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                                                     <label class="col-md-4 control-label">Featured Image</label>
                                                        <label for="file" style="cursor: pointer;" class="uploadImg">Upload Image</label>
                                                        <p><img src="{{asset($seller->image)}}" id="output" width="47" style="margin-right: 120px;float: right;" /></p>
                                                                      </div>
                                                                     <div class="form-group">
                                                                      <label class="col-md-4 control-label">Gallery Image</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-image-o" aria-hidden="true"></i></i></span><input name="gallaryimage[]" type="file"id="image" accept="image/*"placeholder="Featured Image" class="form-control"  style="padding-top: 3px;padding-left: 0px;" multiple></div>
                                                                      </div>
                                                                   </div><br><br>
                                                                   @if($seller->gallery)
                                                                   <div class="row m-b-0"style="width: 100%;margin-top:50px;" >
                                                                        <div class="col-lg-12">
                                                                            <div class= "gallery" style="display: flex;">
                                                                                
                                                                                    <div class="row">
                                                                       @foreach($seller->gallery as $gallery)
                                                                    <div class="col-lg-2 m3 s6">
                                                                   
                                                                           <div class="gallery-image-edit" id="gallery-{{$gallery->id}}">
                                                                                <a href="{{url('dell_image',$gallery->id)}}"  class="fa fa-times" id="{{$gallery->id}}"></a>
                                                                               <img class="responsive-img" src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt="{{$gallery->name}}">
                                                                           </div>
                                                                    </div>
                                                                
                                                                                                                                                 @endforeach
                                                                                                                                                 </div>
                                                                                                                                                 </div>
                                                                                                                                                 </div> 
                                                                       </div>

                                                                    </div>
                                                                    @endif

                                                                   
                                                                   
                                                                   <!--</div>-->
                                                                   
                                                                </fieldset>
                                                             </td>
                                                             <td colspan="1">
                                                                <fieldset>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Address  <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></i></span><input required name="address" placeholder="Address" class="form-control" required="true" value="{{$seller->address}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Email</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input  name="email" placeholder="Email" class="form-control"  value="{{$seller->email}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">City <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><input  required name="city" placeholder="City" class="form-control" value="{{$seller->city}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Purpose Type  <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                                           <select class="form-control" required name="purpose">
                                                                               <optgroup label="Home">
                                                                                  <option value="House"@php if($seller->purpose=="House"){echo "selected";} @endphp>House</option>
                                                                                  <option value="Flat"@php if($seller->purpose=="Flat"){echo "selected";} @endphp>Flat</option>
                                                                                  <option value="Upper Portion"@php if($seller->purpose=="Upper Portion"){echo "selected";} @endphp>Upper Portion</option>
                                                                                  <option value="Ground Portion"@php if($seller->purpose=="Ground Portion"){echo "selected";} @endphp>Ground Portion</option>
                                                                                  <option value="Basement"@php if($seller->purpose=="Basement"){echo "selected";} @endphp>Basement</option>
                                                                                  <option value="Farm House"@php if($seller->purpose=="Farm House"){echo "selected";} @endphp>Farm House</option>
                                                                                  <option value="Room"@php if($seller->purpose=="Room"){echo "selected";} @endphp>Room</option>
                                                                               </optgroup>
                                                                               <optgroup label="Land">
                                                                                  <option value="Residential Plots"@php if($seller->purpose=="Residential Plots"){echo "selected";} @endphp>Residential Plots</option>
                                                                                  <option value="Commercial Plots"@php if($seller->purpose=="Commercial Plots"){echo "selected";} @endphp>Commercial Plots</option>
                                                                                  <option value="Agricultural Plots"@php if($seller->purpose=="Agricultural Plots"){echo "selected";} @endphp>Agricultural Plots</option>
                                                                                  <option value="Industrial Plots"@php if($seller->purpose=="Industrial Plots"){echo "selected";} @endphp>Industrial Plots</option>
                                                                                  {{-- 
                                                                                  <option value="Plot File">Plot File</option>
                                                                                  <option value="Plot Farm">Plot Farm</option>
                                                                                  --}}
                                                                               </optgroup>
                                                                               <optgroup label="Commercial">
                                                                                  <option value="Office"@php if($seller->purpose=="Office"){echo "selected";} @endphp>Office</option>
                                                                                  <option value="Shop"@php if($seller->purpose=="Shop"){echo "selected";} @endphp>Shop</option>
                                                                                  <option value="Factory"@php if($seller->purpose=="Factory"){echo "selected";} @endphp>Factory</option>
                                                                                  <option value="Warehouse"@php if($seller->purpose=="Warehouse"){echo "selected";} @endphp>Warehouse</option>
                                                                                 
                                                                                  <option value="Building"@php if($seller->purpose=="Building"){echo "selected";} @endphp>Building</option>
                                                                                  <option value="Basement"@php if($seller->purpose=="Basement"){echo "selected";} @endphp>Basement</option>
                                                                                  <option value="Other"@php if($seller->purpose=="Other"){echo "selected";} @endphp>Other</option>
                                                                                  
                                                                               </optgroup>
                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Land Area</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                          
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                                                        <select class="form-control" name="area">
                                                                                <option name="area"value="area" >Select Area </option> 
                                                                              <option value="Kanal"@php if($seller->area=="Kanal"){echo "selected";} @endphp>Kanal</option>
                                                                              <option value="Marla"@php if($seller->area=="Marla"){echo "selected";} @endphp>Marla</option>
                                                                              <option value="Sqft"@php if($seller->area=="Squar Feet"){echo "selected";} @endphp>Squar Feet</option>
                                                                              <option value="Sq.yd"@php if($seller->area=="Squar yard"){echo "selected";} @endphp>Squar yard</option>
                                                                          </select>
                                                                          </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Size <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span><input  required name="size" placeholder="Size" class="form-control"  value="{{$seller->size}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Plot Number</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span><input  name="plot_number" placeholder="Plot Number" class="form-control"  value="{{$seller->plot_number}}" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   
                                                                      <br>
                                                                      <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Upload Video</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-video-o" aria-hidden="true"></i></span><input name="video" type="file"accept="video/*" placeholder="Upload Video" class="form-control"  style="padding-top: 3px;padding-left: 0px;"></div>
                                                                      </div>
                                                                   </div>
                                                                   
                                                                </fieldset>
                                                                <br>
                                                                <br>
                                                               
                                                             </td>
                                                            
                                                         </tr>                                                      
                                                      </tbody>
                                                   </table>
                                                   <div class="row">
                                                       <div class="col-lg-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Description:</label>
                                                            <div class="col-sm-10">
                                                               <textarea class="form-control" name="description" rows="10"
                                                                  id="comment"
                                                                  placeholder="{{ trans('Description') }}">{{$seller->description}}</textarea>
                                                            </div>
                                                         </div>
                                                         <div class="form-grouppppp">
                                                            <button type="submit"
                                                               class="btn btn-primary submitFormBtn">Submit</button>
                                                         </div>
                                                       </div>
                                                   </div>
                                                </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    
    <!--<script src="{{ asset('new/assets/js/easy-number-separator.js')}}"></script>-->
    <!-- Responsive examples -->
    <script src="{{ asset('new/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('new/assets/pages/datatables.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('new/assets/js/app.js') }}"></script>
    <script src="{{ asset('new/toastr/toastr.min.js') }}"></script>
<script>

    jQuery(".purposeSelect option").click(function(){
    var value=jQuery(this).val();
    jQuery(".purposeSelect a span").text(value);

})
</script>
<script type="text/javascript">
	$('.numberInput').on("input", function() {
	  var dInput = this.value;
	  console.log(dInput);
	  var returnNumber=numberToWords(dInput);
      $('.wordAmount').text(returnNumber);
		console.log(returnNumber);
	//   $('#output').text(dInput);
	// });
	});
	function getNumber(){
		var number =$(".numberInput").val();
		var returnNumber=numberToWords(number);
		console.log(returnNumber);
	}
	function numberToWords(number) { 
	console.log("number",number) 
        var digit = ['zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];  
        var elevenSeries = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];  
        var countingByTens = ['Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];  
        var shortScale = ['', 'Thousand', 'Million', 'Billion', 'Trillion'];  
  
        number = number.toString(); number = number.replace(/[\, ]/g, ''); 
        if (number != parseFloat(number)) 
        	return 'not a number'; var x = number.indexOf('.'); 
        if (x == -1) 
        	x = number.length; 
        if (x > 15) 
        	return 'too big'; 
        	var n = number.split(''); 
        	var str = ''; 
        	var sk = 0; 
        	for (var i = 0; i < x; i++) { 
        		if ((x - i) % 3 == 2) { 
        			if (n[i] == '1') { 
        				str += elevenSeries[Number(n[i + 1])] + ' '; i++; sk = 1; 
        			} 
        			else if (n[i] != 0) { 
        				str += countingByTens[n[i] - 2] + ' '; sk = 1; } 
        			} 
        			else if (n[i] != 0) { 
        				str += digit[n[i]] + ' '; 
        				if ((x - i) % 3 == 0) 
        					str += 'hundred '; sk = 1; } if ((x - i) % 3 == 1) { if (sk) str += shortScale[(x - i - 1) / 3] + ' '; sk = 0; } } if (x != number.length) { var y = number.length; str += 'point '; for (var i = x + 1; i < y; i++) str += digit[n[i]] + ' '; } str = str.replace(/\number+/g, ' '); return str.trim() + ".";  
  		return number;
    } 
</script>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<script>
$('.deleteRecord').click(function(){
  
   var id = (this.id);
    // alert(id);
   
    $.ajax(
    {
        url: "dell_image/"+id,
        type: 'GET',
        
        success: function (){
            console.log("it Works");
        }
    });
});
// $(".deleteRecord").click(function(){
//     var id = $(this).data("id");
   
//     $.ajax(
//     {
//         url: "dell_image/"+id,
//         type: 'GET',
//         data: {
//             "id": id,
           
//         },
//         success: function (){
//             console.log("it Works");
//         }
//     });
   
// });
</script>
<script>
var limit = 30;
$(document).ready(function(){
    $('#image').change(function(){
        var files = $(this)[0].files;
        if(files.length > limit){
            alert("You can select max "+limit+" images.");
            $('#image').val('');
            return false;
        }else{
            return true;
        }
    });
});
</script>

    @toastr_render
    @yield('scripts')
</body>


</html>
