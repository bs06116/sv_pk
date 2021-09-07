@extends('layouts.footer')
<link href="{{asset('new/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<style>
    .swal-button {
    background-color: #bc985f !important;
    color: #fff;
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
}
</style>
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
                        {{-- <h1><span style="margin-top: -99px;padding-left: 909px;color:#BC985F; "> Contact</span></h1> --}}
                    </div>
                    <div class="col-lg-6">
                        <h1><span style="float: right;color:#BC985F;font-size: 21px;"> Contact Us</span></h1>
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
               <div class="col-lg-4">
                   <div class="leftDiv">
                       <h3 class="commonHeading lineChange">Our <span style="color: #bc985f;">Contact</span></h3>
                       <p>We would love to hear your opinion about Shinny View – for example, if anything you really like about our website or if you're having any concerns please write to us.
                        I consent with storage and handling of my data by Shinny View.
                        </p>
                       <ul class="contactLis">
                            <li>
                               <a href="https://goo.gl/maps/AQodFg21n6ujFGu39"><i class="fa fa-map-marker" aria-hidden="true"></i> Office No: 7-A, 2nd Floor, Islam Plaza, G-9 Markaz &nbsp;, Islamabad</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>info@shinnyview.com</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-phone" aria-hidden="true"></i> 0330-6969698</a>
                            </li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-8">
                   <div class="rightDiv">
                    <form class="" method="post" action="{{route('contact.store')}}">
                        @csrf
    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <input name="username" type="text" required class="form-control" placeholder="Name" >
                                <i class="fa fa-user" aria-hidden="true"></i>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                <input name="email" type="text" class="form-control" required placeholder="Email"><br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                <input name="phone_num" type="text" class="form-control" required placeholder="Phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <!--<label for="pakage" class="col-form-label" name="pakage">Pakage</label>                 -->
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                <select class="custom-select form-control decor"name="subject">
                                    <option name="subject" selected>Subject</option>
                                    <option name="subject"value="Estate Agents">Estate Agents</option>
                                    <option name="subject" value="Private Seller">Private Seller</option>
                                    <option name="subject"value="Buyer">Buyer</option>
                                    <option name="subject"value="Join SV">Join SV</option>
                                    <option name="subject"value="Advertise with SV">Advertise with SV</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="message-place">
                            <div class="inputSpan">
                            <textarea name="message" rows="3" class="form-control " required placeholder="Message"></textarea>
                            <i class="fa fa-comment" aria-hidden="true"></i>
                        </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-lg-12">
                                <button class="formSubmitBtn">Submit</button>
                            </div>
                        </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
   
    {{-- <div class="section-full">
        <div id="map">
            <iframe src="https://www.google.com/maps/d/embed?mid=1JEMsdtHVgRzH4uiZMBlAkmuLKPh15gbx&hl=en" width="100%"  height="380"></iframe>
        </div>
   </div>           
    <!-- SECTION CONTENT END --> --}}
    
</div>
<script src="{{asset('new/assets/js/app.js')}}"></script>
  <script src="{{asset('new/toastr/toastr.min.js')}}"></script>
  <script>$(window).on('load', function(){
    @if(Session::has('emailsend'))
    </script>
    <script>
swal("Thank You","A member of the team will be in touch with you shortly");
  </script>

  @endif
  @toastr_render
@endsection