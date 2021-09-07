@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <div class="property_list">

        <div class="propertyHeader">
            <div class="aboutnew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ipt-title"><span style="margin-left: 464px"> ABOUT US</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutInfoMain">
                        <div class="data">
                            <h3><span style="text-align: center"> WHAT IS Shinnyview.com?</span></h3>
                            <div class="first">
                                <p>We’re (ShinnyView) Pakistan’s best property portal.
                                    ShinnyView wants to empower Pakistan’s choice around property marketplace. We have set a
                                    platform for our users and businesses to publish and find their dream house,
                                    residential, commercial, leasing, agricultural land and plots around the country without
                                    any hassle.
                                </p>
                            </div>
                            <div class="second">
                                <p>There are thousands of properties listed on ShinnyView to browse. We are aware that you
                                    are in search of a nice and comfortable place to live round the country. We allow you to
                                    filter your choice with a trustworthy and affordable price that will match your demands
                                    and budget so you can be sure that you aren’t paying extra.
                                </p>
                            </div>
                            <div class="thirt">
                                <p>ShinnyView’s customers are mostly: estate agents, lettings agents, residential &
                                    commercial agents, private sellers and developers across the country.
                                </p>
                            </div>
                            <div class="fourth">
                                <p>Our aim is to get Pakistan’s leading and most engage property viewers and the biggest
                                    list of properties together in one place. We have an advantage from our powerful
                                    property system that we can put into effect as our property viewers and the properties
                                    our clients advertise.
                                </p>
                            </div>
                            <div class="aboutnn">
                                <img src="{{ asset('assets/img/new111.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marketInfoDiv">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature">
                                <img class="img-responsive"  src="{{asset('assets/img/image (1).png')}}" alt="">
                                <h3 class="feature__title"><span style="color: #bc985f"> SIMPLE PRICING </span></h3>
                                <p class="feature__desc">
                                    We at ShinnyView have a simple pricing system that enables you to sell or buy any kind of properties without any overhead charges.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature">
                                <img class="img-responsive" src="{{asset('assets/img/image (2).png')}}" alt="">
                                <h3 class="feature__title"><span style="color: #bc985f"> WIDE RANGE OF PROPERTIES </span></h3>
                                <p class="feature__desc">
                                    WIDE RANGE OF PROPERTIES with a robust selection in popular cities such as private, commercial properties, land or cooperate site to rent.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature">
                                <img class="img-responsive" src="{{asset('assets/img/image (4).png')}}" alt="">
                                <h3 class="feature__title"><span style="color: #bc985f"> PRE-SALE CHECK </span></h3>
                                <p class="feature__desc">
                                    Our system takes the information of each property from our trusted estate agents through Licensing Development Authorities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="testimonialDiv">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <div class="testimonialDivInfo">-->
<!--                    <h1 class="ourTestimonial">Our Testimonial</h1>-->
<!--                    <p class="testimonialText">Our dealers & customers are very important to us, here's what they say about us:</p>-->
<!--                    <a href="{{url('contact')}}" class="btn important-btn btn-theme btn-md">Contact us</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-8">-->
<!--                <div class="testimonial-class">-->
<!--                    <div class="testimonial-info-box">-->
<!--                        <div class="profile-user">-->
<!--                            <div class="avatar">-->
<!--                                <img src="{{asset('assets/img/bbbb.png')}}" alt=""class="rounded-circle">-->
<!--                            </div>-->
                        
<!--                        </div>-->
<!--                        <h5>-->
<!--                            <a>Majeed Shakir</a>-->
<!--                            </h5>-->
<!--                            <h6>Estate Agent, Islamabad</h6>-->
<!--                            <p><i class="fa fa-quote-left"></i>The top property website! ShinnyView is really nice company to deal with. Their customer service is very friendly and website posting process is very simple and straight. Great to advertise with ShinnyView and wishes for the best.<i class="fa fa-quote-right"></i></p>-->
<!--                    </div>-->
<!--                    <div class="testimonial-info-box">-->
<!--                        <div class="profile-user">-->
<!--                            <div class="avatar">-->
<!--                                <img src="{{asset('assets/img/Bilal.jpeg')}}" alt=""class="rounded-circle">-->
<!--                            </div>-->
                        
<!--                        </div>-->
<!--                        <h5>-->
<!--                            <a>M. Bilal Shams</a>-->
<!--                            </h5>-->
<!--                            <h6>Estate Agent,Islamabad</h6>-->
<!--                            <p><i class="fa fa-quote-left"></i> ShinnyView offered a FREE listing for limited period. This is a very good for dealers.  The website is very simple to use for posting our properties. I have excellent experience with Shinny View. Their searching filter is very easy.<i class="fa fa-quote-right"></i></p>-->
<!--                    </div>-->
<!--                    <div class="testimonial-info-box">-->
<!--                        <div class="profile-user">-->
<!--                            <div class="avatar">-->
<!--                                <img src="{{asset('assets/img/prim.png')}}" alt=""class="rounded-circle">-->
<!--                            </div>-->
                        
<!--                        </div>-->
<!--                        <h5>-->
<!--                            <a>Prime Deal</a>-->
<!--                            </h5>-->
<!--                            <h6>Founder , Islamabad</h6>-->
<!--                            <p><i class="fa fa-quote-left"></i>I am very happy with ShinnyView. The initial service we received from SV is remarkable. Their registration and property listing process is very easy and simple. We are pleased to advertise with SV. Great to have SV.....!! <i class="fa fa-quote-right"></i></p>-->
<!--                    </div>-->
                    <!--<div class="testimonial-info-box">-->
                    <!--    <div class="profile-user">-->
                    <!--        <div class="avatar">-->
                    <!--            <img src="{{asset('assets/img/avatar-7.jpg')}}" alt="">-->
                    <!--        </div>-->
                        
                    <!--    </div>-->
                    <!--    <h5>-->
                    <!--        <a>Auro Navanth</a>-->
                    <!--        </h5>-->
                    <!--        <h6>Office Manager, New York</h6>-->
                    <!--        <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <i class="fa fa-quote-right"></i></p>-->
                    <!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
    </div>
@endsection
