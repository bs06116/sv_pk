<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shinny View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('assets/img/webtop.jpeg')}}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>


</head>

</html>

<body>
    <div id="header">
        <nav class="navbar navbar-fixed-top">
            <div class="top-header"
                style="background-color: #1B1A2F; color:#fff; margin-top:-17px; margin-bottom:10px; height:auto;">
                <div class="time">
				<span style="margin-top:25px;font-weight:bold;font-size: 18px;">SHINNY VIEW |&nbsp;</span><span style="margin-top:25px;color:red;font-weight:bold;font-size: 18px;"> GET DISCOUNT UPTO 73% </span>  &nbsp;	<span style="margin-top:25px;font-weight:bold;font-size: 18px;">&nbsp;|&nbsp;ENDS IN
:</span>
                    <div class="commonDiv">
                       <b> <p id="demo" class="demoTimer"></p></b>
                        <p class="dayText">DAYS</p>
                    </div>
                    <div class="commonDiv">
                       <b> <p id="demoHours" class="demoTimer"></p></b>
                        <p class="dayText hoursText">HOURS</p>
                    </div>
                    <div class="commonDiv">
                        <b><p id="demoMin" class="demoTimer"></p></b>
                        <p class="dayText minText">MINUTES</p>
                    </div>
                    <div class="commonDiv">
                        <b><p id="demoSec" class="demoTimer"></p></b>
                        <p class="dayText secText">SECONDS</p>
                    </div>
               </div>
               <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("December 02, 2021 00:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                      // Get today's date and time
                      var now = new Date().getTime();

                      // Find the distance between now and the count down date
                      var distance = countDownDate - now;

                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                      // Output the result in an element with id="demo"
                      document.getElementById("demo").innerHTML = days;
                      document.getElementById("demoHours").innerHTML = hours;
                      document.getElementById("demoMin").innerHTML = minutes;
                      document.getElementById("demoSec").innerHTML = seconds;


                      // If the count down is over, write some text
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                      }
                    }, 1000);
              </script>
            </div>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt=""style="width: 170px;margin: 10px 0px;">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}"><b>Home</b></a></li>
                        <li class="navitem about" onClick="activateItem(this)"><a class="koi"
                                href="{{ route('property-sale') }}"><b>For Sale</b></a></li>
                        <li><a href="{{ route('property-rent') }}"><b>Rent</b></a></li>
                        <li><a href="{{ route('property-commercial') }}"><b>Commercial</b></a></li>
                        <li><a href="{{ route('property-land') }}"><b>Land</b></a></li>
                        {{-- <li><a href="#">New Project</a></li> --}}
                        <li><a href="{{ route('property-lease') }}"><b>Lease</b></a></li>
                        <li><a href="{{ route('property-valuation') }}"><b>Valuation</b></a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                        @if(Auth::user()->type=='admin')

                            <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list homeList">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src={{Auth::user()->image}} alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="{{route('dashboard')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                                    <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                                    <a class="dropdown-item" href="{{route('user.logout')}}"><i
                                        class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                                 </li>
                          </ul>
                        @elseif(Auth::user()->type=='seller')
                         <ul class="list-inline float-right mb-0">
                             <li class="sellproperty">
                                 <span style="color: #8a6d3b; border: solid;
                         border-radius: 25px; font-size: 12px;border: 1px solid #000;
    padding: 5px;background: #1b1a2f;padding-left: 15px;
    padding-right: 15px;font-weight:bold;"><a style="color:#fff  !important;" href="{{route('addproperty')}}">Sell Your Property</a></span>
                        </li>
                                    <li class="list-inline-item dropdown notification-list homeList">
                                        <li class="list-inline-item dropdown notification-list ">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src={{Auth::user()->image}} alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="{{route('dashboard')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                                    <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                                    <a class="dropdown-item" href="{{route('user.logout')}}"><i
                                        class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                                </li>

                         </ul>

                         @elseif(Auth::user()->type=='agent')
                         <ul class="list-inline float-right mb-0">
                             <li class="sellproperty">
                                 <span style="color: #8a6d3b; border: solid;
                                     border-radius: 25px; font-size: 12px;border: 1px solid #000;
                                     padding: 5px;background: #1b1a2f;padding-left: 15px;
                                    padding-right: 15px;font-weight:bold;"><a style="color:#fff  !important;"
                                    href="{{route('addagentproperty')}}">Sell Your Property</a></span>
                        </li>
                                    <li class="list-inline-item dropdown notification-list homeList">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src={{Auth::user()->image}} alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="{{route('dashboard')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                                    <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                                    <a class="dropdown-item" href="{{route('user.logout')}}"><i
                                        class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                                </li>

                         </ul>

                         @elseif(Auth::user()->type=='buyer')
                         <ul class="list-inline float-right mb-0">
                                    <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src={{Auth::user()->image}} alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="{{route('dashboard')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ url('password') }}"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Change Password</a>
                                    <a class="dropdown-item" href="{{ url('contact') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Support</a>
                                    <a class="dropdown-item" href="{{route('user.logout')}}"><i
                                        class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>

                                </li>
                         </ul>
                        @endif
                        @else
                         <li class="sellproperty">
                                 <span style="color: #8a6d3b; border: solid;
                         border-radius: 25px; font-size: 12px;border: 1px solid #000;
    padding: 5px;background: #1b1a2f;padding-left: 15px;
    padding-right: 15px;font-weight:bold;"><a style="color:#fff !important;" href="{{route('addagentproperty')}}">Sell Your Property</a></span>
                        </li>
                        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
     <script>
    $(".notification-list").click(function(){
        if($(".notification-list .dropdown-menu").hasClass("show")){
            $(".notification-list .dropdown-menu").removeClass("show");
        }
        else
        {
            $(".notification-list .dropdown-menu").addClass("show");
        }
    });
    </script>
    @yield('content')
