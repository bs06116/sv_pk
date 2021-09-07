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
    <link rel="shortcut icon" href="{{ asset('new/assets/images/favicon.png') }}">
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
        select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 16px) !important;
}
    .addPropertyDiv{
        width:100% !important;
    }
        .container {
    width: 1050px;
}
table.table.table-striped {
    margin-left: -9px;
}
.form-grouppppp {
    margin-top: 25px;
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
.infoText{
    position: absolute;
    right: 4px;
    z-index: 1000;
    padding: 6px;
    cursor:pointer;
}
.sizeText{
        color: red;
    font-style: italic;
    font-size: 10px;
    font-weight: 600;
    display:none;
}
@media only screen and (min-width: 768px) {
    body.fixed-left .side-menu.left{
        margin-left:0px !important;
    }
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
.addPropertyDiv {
    width: 100% !important;
    max-width: 100%;
    padding: 0;
    margin: 0;
}
}
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
 
 padding: 10px 30px;
  border-radius: 14px;
  background: #83693b;
  border: 2px solid #fff;
  color: white;
  left: 26px;
">Upgrade Package</button>
<br><br><p class="sizeText"
style="color: #83693b; text-align: center;display: none;margin-top: 21px;">For upgrade your Package Please contact with administrator</p>
<br><br><br>

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
                <h3 class="page-title">Dashboard</h3>
              </li>
            </ul>

          

          </nav>

        </div>                    <!------ Include the above in your HEAD tag ---------->
                                                <div class="container addPropertyDiv">
                                                    <form class="well form-horizontal"method="post" action="{{route('seller.store') }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                    <table class="table table-striped">
                                                      <tbody>
                                                        
                                                        
                                                         <tr>
                                                            
                                                            <td colspan="1">
                                                                <fieldset>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Title of Property <span style="color:red;">*</span></label>
                                                                      <input name="status" type="hidden"value="agent"id="example-date-input">
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-font" aria-hidden="true"></i></span><input required name="name" style="text-transform: capitalize;" placeholder="Title of Property" class="form-control" required="true" value="" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Phone Number <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="phone_num" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Province <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
                                                                            <select  class="form-control" name="province" required>
                                                                               <option name="province" value="">Select Province </option>
                                                                               <option value="Islamabad">Federal</option>
                                                                               <option value="Punjab">Punjab</option>
                                                                               <option value="KPK">KPK</option>
                                                                               <option value="Sindh">Sindh</option>
                                                                               <option value="Balochistan">Balochistan</option>
                                                                               <option value="Azad Kashmir">Azad Kashmir</option>
                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Property Type <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                                            <select required class="form-control" name="type">
                                                                               <option name="type" value="">Select Type </option>
                                                                               <option value="sale">Sale</option>
                                                                               <option value="rent">Rent</option>
                                                                               <option value="lease">Lease</option>
                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Price <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                        <span class="wordAmount"></span>
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span><input required  name="price" placeholder="Price"
                                                                         class="input-group form-control numberInput" required="true" value="" type="text">
                                                                            <input name="enable" type="hidden"value="0"id="example-date-input">
                                                                            
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Bedroom</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-bed" aria-hidden="true"></i></span><input id="beds"  name="bedroom" placeholder="Bedroom" class="form-control"  value="" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group" >
                                                                    <label class="col-md-4 control-label">Bath</label>
                                                                    <div class="col-md-8 inputGroupContainer">
                                                                       <div class="input-group"><span class="input-group-addon"><i class="fa fa-bath" aria-hidden="true"></i></span><input id="baths" name="Bath" placeholder="Bath" class="form-control"  value="" type="text"></div>
                                                                    </div>
                                                                 </div>
                                                                   <br>
                                                                   <br>
                                                                   
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Garage</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span><input id="garages" name="garage" placeholder="Garage" class="form-control" value="" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Featured Image <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span><input required name="image" type="file"accept="image/png,image/jpeg," placeholder="Featured Image" class="form-control" required="true" style="padding-top: 3px;padding-left: 0px;"></div>
                                                                      </div>
                                                                   </div>
                                                                    <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Gallery Image <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-image-o" aria-hidden="true"></i></i></span><input name="gallaryimage[]"id="image" type="file" required="true" accept="image/*" placeholder="Featured Image" class="form-control"  style="padding-top: 3px;padding-left: 0px;" multiple><span class="infoText"><i class="fa fa-info" aria-hidden="true"></i></span></div>
                                                                         <p class="sizeText">Max Image Upload 30 and Min Image Upload 2</p>
                                                                      </div>
                                                                      
                                                                   </div>
                                                                   
                                                                </fieldset>
                                                             </td>
                                                             <td colspan="1">
                                                                <fieldset>
                                                                 
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Email</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input  name="email" placeholder="Email" class="form-control"  type="text"required="true"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                        <label class="col-md-4 control-label">City <span style="color:red;">*</span></label>
                                                                        <div class="col-md-8 inputGroupContainer">
                                                                            
                                                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                                                                <select name="city" id="country" class="form-control input-lg dynamic" data-dependent="address"style="font-size: 14px;">
                                                                                    <option  value="">Select City</option>
                                                                                    @foreach($country_list as $country)
                                                                                    <option value="{{ $country->country}}">{{ $country->country }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                 </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                    <label class="col-md-4 control-label">Address <span style="color:red;">*</span></label>
                                                                    <div class="col-md-8 inputGroupContainer">
                                                                        
                                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                                                            <select name="address" id="address" class="form-control input-lg dynamic" style="font-size: 14px;">
                                                                                <option value="">Select Address</option>
                                                                               </select>
                                                                        </div>
                                                                    </div>
                                                             </div>
                                                                   <br>
                                                                   <br>
                                                                   <input type="hidden" name="property" id="setTypeValue" readonly="true" />
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Purpose Type <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                                            <select class="form-control" name="purpose"id="purposeType" onchange="changestatus()" required>
                                                                               <optgroup label="Home">
                                                                                   <option value="">Select Purpose</option>
                                                                                  <option value="House">House</option>
                                                                                  <option value="Flat">Flat</option>
                                                                                  <option value="Upper Portion">Upper Portion</option>
                                                                                  <option value="Lower Portion">Lower Portion</option>
                                                                                  <option value="Lower Portion">Basement</option>
                                                                                  <option value="Farm House">Farm House</option>
                                                                                  <option value="Room">Room</option>
                                                                               </optgroup>
                                                                               <optgroup label="Land">
                                                                                  <option value="Residential Plots">Residential Plots</option>
                                                                                  <option value="Commercial Plots">Commercial Plots</option>
                                                                                  <option value="Agricultural Plots">Agricultural Plots</option>
                                                                                  <option value="Industrial Plots">Industrial Plots</option>
                                                                                  {{-- 
                                                                                  <option value="Plot File">Plot File</option>
                                                                                  <option value="Plot Farm">Plot Farm</option>
                                                                                  --}}
                                                                               </optgroup>
                                                                               <optgroup label="Commercial">
                                                                                  <option value="Office">Office</option>
                                                                                  <option value="Shop">Shop</option>
                                                                                  <option value="Factory">Factory</option>
                                                                                  <option value="Warehouse">Warehouse</option>
                                                                                 
                                                                                  <option value="Building">Building</option>
                                                                                  <option value="Building">Basement</option>
                                                                                  <option value="Other">Other</option>
                                                                                  
                                                                               </optgroup>
                                                                            </select>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Land Area <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                          
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span><select class="form-control" name="area" id="" required>
                                                                              <option name="area" value="">Select Area</option>
                                                                              <option value="Kanal">Kanal</option>
                                                                              <option value="Marla">Marla</option>
                                                                              <option value="Sq.yd">Square yard</option>
                                                                              <option value="Sq.ft">Square Feet</option>
                                                                          </select></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Size <span style="color:red;">*</span></label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span><input required name="size" placeholder="Size" class="form-control"  value="" type="text"></div>
                                                                      </div>
                                                                   </div>
                                                                   <br>
                                                                   <br>
                                                                   <div class="form-group">
                                                                      <label class="col-md-4 control-label">Plot Number</label>
                                                                      <div class="col-md-8 inputGroupContainer">
                                                                         <div class="input-group"><span class="input-group-addon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span><input  name="plot_number" placeholder="Plot Number" class="form-control"  value="" type="text"></div>
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
                                                            <label class="col-sm-2 col-form-label">Description: <span style="color:red;">*</span></label>
                                                            <div class="col-sm-10">
                                                               <textarea class="form-control" name="description" rows="10" id="comment" value="" required></textarea>
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
    <!-- Responsive examples -->
    <script src="{{ asset('new/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('new/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    
<!--<script src="{{ asset('new/assets/js/easy-number-separator.js')}}"></script>-->
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
<script>
    $(".infoText").click(function(){
        if($(".sizeText").css("display")=="block"){
            $(".sizeText").css("display","none");
        }
        else{
            $(".sizeText").css("display","block");
        }
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
    /*
 Template Name: Admiry - Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Main js
 */

! function($) {
    "use strict";

    var MainApp = function() {
        this.$body = $("body"),
            this.$wrapper = $("#wrapper"),
            this.$btnFullScreen = $("#btn-fullscreen"),
            this.$leftMenuButton = $('.button-menu-mobile'),
            this.$menuItem = $('.has_sub > a')
    };
    //scroll
    MainApp.prototype.initSlimscroll = function() {
            $('.slimscrollleft').slimscroll({
                height: 'auto',
                position: 'right',
                size: "10px",
                color: '#9ea5ab'
            });
        },
        //left menu
        MainApp.prototype.initLeftMenuCollapse = function() {
            var $this = this;
            this.$leftMenuButton.on('click', function(event) {
                event.preventDefault();
                $this.$body.toggleClass("fixed-left-void");
                $this.$wrapper.toggleClass("enlarged");
            });
        },
        //left menu
        MainApp.prototype.initComponents = function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        },
        //full screen
        MainApp.prototype.initFullScreen = function() {
            var $this = this;
            $this.$btnFullScreen.on("click", function(e) {
                e.preventDefault();

                if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) { // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            });
        },
        //full screen
        MainApp.prototype.initMenu = function() {
            var $this = this;
            $this.$menuItem.on('click', function() {
                var parent = $(this).parent();
                var sub = parent.find('> ul');

                if (!$this.$body.hasClass('sidebar-collapsed')) {
                    if (sub.is(':visible')) {
                        sub.slideUp(300, function() {
                            parent.removeClass('nav-active');
                            $('.body-content').css({ height: '' });
                            adjustMainContentHeight();
                        });
                    } else {
                        visibleSubMenuClose();
                        parent.addClass('nav-active');
                        sub.slideDown(300, function() {
                            adjustMainContentHeight();
                        });
                    }
                }
                return false;
            });

            //inner functions
            function visibleSubMenuClose() {
                $('.has_sub').each(function() {
                    var t = $(this);
                    if (t.hasClass('nav-active')) {
                        t.find('> ul').slideUp(300, function() {
                            t.removeClass('nav-active');
                        });
                    }
                });
            }

            function adjustMainContentHeight() {
                // Adjust main content height
                var docHeight = $(document).height();
                if (docHeight > $('.body-content').height())
                    $('.body-content').height(docHeight);
            }
        },
        MainApp.prototype.activateMenuItem = function() {
            // === following js will activate the menu in left side bar based on url ====
            $("#sidebar-menu a").each(function() {
                if (this.href == window.location.href) {
                    $(this).addClass("active");
                    $(this).parent().addClass("active"); // add active to li of the current link
                    $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                    $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
                    $(this).parent().parent().prev().click(); // click the item to make it drop
                }
            });
        },
        MainApp.prototype.Preloader = function() {
            $(window).load(function() {
                $('#status').fadeOut();
                $('#preloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({
                    'overflow': 'visible'
                });
            });
        },
        MainApp.prototype.init = function() {
            this.initSlimscroll();
            this.initLeftMenuCollapse();
            this.initComponents();
            this.initFullScreen();
            this.initMenu();
            this.activateMenuItem();
            this.Preloader();
        },
        //init
        $.MainApp = new MainApp, $.MainApp.Constructor = MainApp
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.MainApp.init();
}(window.jQuery);



    
</script>
<script>
    var parentValue;
    $('#purposeType').on('change', function() {
    var selected = $("option:selected", this);
    parentValue=selected.parent()[0].label;
    console.log(selected.parent()[0].label);
    jQuery("#setTypeValue").val(parentValue);
  
    });
    </script>
    <script>
        $(".button-menu-mobile").click(function(){
            if($(".side-menu.left").css("margin-left")<"0px"){
                $(".side-menu.left").css("width","240px");
                $(".side-menu.left").css("margin-left","0px")
            }
            else{
                $(".side-menu.left").css("width","240px");
                $(".side-menu.left").css("margin-left","-500px")
            }
        })
    </script>
    
<script>
    $("button.infoTextsss").click(function(){
        if($(".sizeTextsss").css("display")=="block"){
            $(".sizeTextsss").css("display","none");
        }
        else{
            $(".sizeTextsss").css("display","block");
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
{{-- image count --}}
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
    <script>
        $(document).ready(function(){
        
         $('.dynamic').change(function(){
          if($(this).val() != '')
          {
           var select = $(this).attr("id");
           var value = $(this).val();
           var dependent = $(this).data('dependent');
           var _token = $('input[name="_token"]').val();
           $.ajax({
            url:"{{ route('addagentproperty') }}",
            method:"POST",
            data:{select:select, value:value, _token:_token, dependent:dependent},
            success:function(result)
            {
             $('#'+dependent).html(result);
            }
        
           })
          }
         });
        
         $('#country').change(function(){
          $('#state').val('');
          $('#address').val('');
         });
        
         $('#state').change(function(){
          $('#address').val('');
         });
         
        
        });
        </script>
            <script>
            function changestatus()
            {
    var status = document.getElementById("purposeType");
        if (status.value == "Residential Plots" || status.value == "Commercial Plots"
         || status.value == "Agricultural Plots" || status.value == "Industrial Plots")
        {
            
            document.getElementById("beds").disabled = true;
            document.getElementById("baths").disabled = true;
            document.getElementById("garages").disabled = true;
          
        }

        else
        {
            document.getElementById("beds").disabled = false;
            document.getElementById("baths").disabled = false;
            document.getElementById("garages").disabled = false;
        }        
}
        </script>

    @toastr_render
    @yield('scripts')
</body>


</html>
