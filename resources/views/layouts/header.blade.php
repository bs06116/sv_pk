<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shinny View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('assets/img/webtop.jpeg')}}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>
<script>
  $(document).ready(function(){
   $('.agent-img').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            speed: 800,
            enterMode: true,
            autoplay: true,
            responsive: [
                {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
        $('.your-class').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            speed: 800,
            enterMode: true,
            autoplay: true,
            arrows:false,
            responsive: [
                {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.lahore-class').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            infinite: true,
            speed: 800,
            enterMode: true,
            autoplay: true
        });
        $('.karachi-class').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            infinite: true,
            speed: 800,
            enterMode: true,
            autoplay: true
        });
        $('.testimonial-class').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            speed: 800,
            enterMode: true,
            autoplay: true,
            arrows: false,
            responsive: [
                {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
      });
</script>
<script>
    $(document).ready(function() {
        $(".lableTabs").click(function() {
            $(".lableTabs").removeClass("active");
            $(this).addClass("active");
        });
        $('.moreText').click(function() {
            if ($(".moreSearchForm").css("display") == "block") {
                $('.moreSearchForm').css("display", "none");
                $('.moreText').html(
                    "<a class='moreText'><i class='fa fa-plus-circle' aria-hidden='true'></i> More Search</a>"
                    );
            } else {
                $('.moreSearchForm').css("display", "block");
                $('.moreText').html(
                    "<a class='moreText'><i class='fa fa-minus-circle' aria-hidden='true'></i> Less Search</a>"
                    );
            }
        });
        $('.advanceSearchText').click(function() {
            if ($(".advanceSearch").css("display") == "block") {
                $('.advanceSearch').css("display", "none");
                $('.advanceSearchText').html(
                    "<a class='advanceSearchText'>More Options <i class='fa fa-angle-down' aria-hidden='true'></i></a>"
                    );
            } else {
                $('.advanceSearch').css("display", "block");
                $('.advanceSearchText').html(
                    "<a class='advanceSearchText'>Less search options <i class='fa fa-angle-up' aria-hidden='true'></i></a>"
                    );
            }
        });


        $('.priceDropDown').click(function() {
            if ($('.priceDropDownDiv').css("display") == 'block') {
                $('.priceDropDownDiv').css("display", "none");
            } else {
                $('.priceDropDownDiv').css("display", "block");
            }
        });
        $('.bedDropDown').click(function() {
            if ($('.bedDropDownDiv').css("display") == 'block') {
                $('.bedDropDownDiv').css("display", "none");
            } else {
                $('.bedDropDownDiv').css("display", "block");
            }
        });
        $('.typeDropDown').click(function() {
            if ($('.typeDropDownDiv').css("display") == 'block') {
                $('.typeDropDownDiv').css("display", "none");
            } else {
                $('.typeDropDownDiv').css("display", "block");
            }
        });
        var url = window.location;
        // Will only work if string in href matches with location
            $('ul.nav a[href="' + url + '"]').parent().addClass('active');
        // Will also work for relative and absolute hrefs
        $('.navbar-nav li a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');

            // $('#configreset').click(function(){
            //     $('#configreset').trigger("reset");
                // console.log("hello");
                //$('#configform')[0].reset();
            // });

            $("#configreset").click(function() {
                $(this).closest('form').find("input[type=text], textarea").val("");
            });
    });

</script>
<script>
    $(document).ready(function() {
       $('.accordion-plus-toggle').click(function(){

        //Remove active classes
        $('.accordion-plus-toggle').removeClass('activeTab');

        //Expand or collapse this panel
        $(this).addClass('activeTab');
     });
 });
 </script>
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
    $(".homeList").click(function(){
        // if($(".homeList .dropdown-menu").hasClass("show")){
        //     $(".homeList .dropdown-menu").removeClass("show");
        // }
        // else
        // {
        //     $(".homeList .dropdown-menu").addClass("show");
        // }
        console.log("here")
    });
    </script>
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
