@extends('layouts.footer')

@extends('layouts.header')
@section('title')
    Contact
@endsection
@section('content')
<div class="page-content">
    <div class="propertyHeader">
        <div class="contactnew">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="ipt-title"><span style="margin-left: -41px;color:#f1f0ee;"> Get In Touch</span></h1>
                        {{-- <h1><span style="margin-top: -99px;padding-left: 909px;color:#BC985F; "> Application Form</span></h1> --}}
                    </div>
                    <div class="col-lg-6">
                        <h1><span style="float: right;color:#BC985F;font-size: 21px;"> Application Form</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/contact.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>

            <div class="wt-bnr-inr-entry">
   <div class="contactInfo">
       <div class="container">
           <div class="row">
               <div class="col-lg-8 mx-auto">
                   <div class="rightDiv">
                   <h5 class="mb-20 form-heading">Aplication Form plots and house</h5>
                    <form class="" method="post" id="application__form" action="{{url('application_form_submit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input name="name" type="text" required class="form-control" minlength="4" placeholder="Name" >
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input name="email" type="email" class="form-control" required placeholder="Email"><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                <select class="custom-select form-control decor"name="gender">
                                    <option name="subject" selected disabled value="" >Gender</option>
                                    <option name="subject"value="Male">Male</option>
                                    <option name="subject" value="Female">Female</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                <select class="custom-select form-control decor"name="status">
                                    <option name="subject" selected disabled value="" >Status</option>
                                    <option name="subject"value="Married">Married</option>
                                    <option name="subject" value="Single">Single</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                   <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                    <input name="cnic" type="number" class="form-control"  placeholder="CNIC(optional)">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <input name="address" type="text" class="form-control"  placeholder="Address (optional)">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input name="Mobile" type="number" class="form-control" required placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <input name="profession" type="text" class="form-control" required placeholder="Profession">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <select class="custom-select form-control decor" id="intrested_dropdown" name="intrested_in" required>
                                    <option name="subject" selected disabled value="" >Intrested In</option>
                                    <option name="subject" value="House">House</option>
                                    <option name="subject" value="Plot">Plot</option>
                                    <option name="subject" value="Commercial">Commercial</option>
                                    @if( request()->get('application') == "form_investment")
                                    <option name="subject" value="Apartment">Apartment</option>
                                    @endif
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan Intrested-more-field" id="House" style="display:none;">
                                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                                    <input name="size" type="text" class="form-control" placeholder="Size" />
                                    <div class="inputSpan mt-21">
                                        <i class="fa fa-arrows" aria-hidden="true"></i>
                                        <select class="custom-select form-control decor" name="land_area">
                                            <option value="Kanal">Kanal</option>
                                            <option value="Marla">Marla</option>
                                            <option value="Sq.yd">Square yard</option>
                                            <option value="Sq.ft">Square Feet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="inputSpan Intrested-more-field" id="Apartment" style="display:none;">
                                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                                    <input name="size_appartment" type="text" class="form-control" placeholder="Size" />
                                </div>
                                <div class="inputSpan Intrested-more-field" id="Plot" style="display:none;">
                                    <i class="fa fa-area-chart" aria-hidden="true"></i>

                                    <input name="size" type="text" class="form-control" placeholder="Size" />
                                    <div class="inputSpan mt-21">
                                        <i class="fa fa-arrows" aria-hidden="true"></i>
                                        <select class="custom-select form-control decor" name="land_area">
                                            <option value="Kanal">Kanal</option>
                                            <option value="Marla">Marla</option>
                                            <option value="Sq.yd">Square yard</option>
                                            <option value="Sq.ft">Square Feet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="Intrested-more-field" id="Commercial" style="display:none;">
                                    @if( request()->get('application') == "form_investment")
                                    <div class="inputSpan">
                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                        <input name="land_socities" type="text" class="form-control" placeholder="Land socities">
                                    </div>
                                    @else
                                    <div class="inputSpan">
                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                        <input name="society" type="text" class="form-control" placeholder="Society">
                                    </div>
                                    <div class="inputSpan mt-21">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                        <input name="cda" type="text" class="form-control" placeholder="CDA">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                   <i class="fa fa-building-o" aria-hidden="true"></i>
                                    <input name="society_intrested" type="text" class="form-control" required placeholder="Society Intrested">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                   <i class="fa fa-arrows" aria-hidden="true"></i>
                                    <input name="sector_area" type="text" class="form-control" required placeholder="Sector/Area">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan" id="down_payment">
                                    <i class="fa fa-handshake-o" style="font-size:12px;" aria-hidden="true"></i>
                                    <select class="custom-select form-control decor"name="down_payment" required>
                                        <option name="subject" selected disabled value="" >Down payment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-21 pr-lg-0">
                                <div class="inputSpan" id="monthly_installment">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <input name="monthly_installment" type="text" class="form-control" required placeholder="Monthly Installment">
                                </div>
                            </div>
                            <div class="col-lg-3 mt-21">
                                <div class="inputSpan">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <select class="custom-select form-control decor" name="ruppes" required>
                                    <option  value="">Select ruppes</option>
                                    <option  value="Hazar">Hazar</option>
                                    <option  value="Lakh">Lakh</option>
                                    <option  value="Crore">Crore</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <label>
                                  <input type="checkbox" name="accept_terms_condition" /> &nbsp; Accept Terms & Condition
                                </label>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-lg-12">
                                <button class="formSubmitBtn mr-20" type="submit" disabled>Submit</button>
                                <div class="mt-20" style="display: none" id="show_message">
                                    <a href="javascript:void(0)" class="nav_helper_links reload">Interested in Investment Opportunities
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                    <a href="{{url('/')}}" class="nav_helper_links">
                                        Home Page  <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
    <input type="hidden" value="{{url('/')}}" id="base_url" />
    <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/application_form.js')}}"></script>

@endsection