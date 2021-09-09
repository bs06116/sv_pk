@extends('layouts.footer')
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
.mt-21{
    margin-top:21px;
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
                    <form class="" method="post" action="{{url('application_form_submit')}}">
                        @csrf
    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <input name="username" type="text" required class="form-control" placeholder="Name" >
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                <input name="email" type="email" class="form-control" required placeholder="Email"><br>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <!--<label for="pakage" class="col-form-label" name="pakage">Pakage</label>                 -->
                                <select class="custom-select form-control decor"name="gender">
                                    <option name="subject" selected disabled>Gender</option>
                                    <option name="subject"value="male">Male</option>
                                    <option name="subject" value="female">Female</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inputSpan">
                                    <!--<label for="pakage" class="col-form-label" name="pakage">Pakage</label>                 -->
                                <select class="custom-select form-control decor"name="status">
                                    <option name="subject" selected disabled>Status</option>
                                    <option name="subject"value="male">Male</option>
                                    <option name="subject" value="female">Female</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="phone_num" type="number" class="form-control" required placeholder="CNIC(optional)">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="address" type="text" class="form-control" required placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="phone_num" type="number" class="form-control" required placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="phone_num" type="text" class="form-control" required placeholder="Profession">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <!--<label for="pakage" class="col-form-label" name="pakage">Pakage</label>                 -->
                                <select class="custom-select form-control decor" id="intrested_dropdown" name="intrested_in">
                                    <option name="subject" selected disabled>Intrested In</option>
                                    <option name="subject" value="house">House</option>
                                    <option name="subject" value="plot">Plot</option>
                                    <option name="subject" value="commercial">Commercial</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan Intrested-more-field" id="house" style="display:none;"> 
                                    <input name="size" type="text" class="form-control" required placeholder="Size">
                                </div>
                                <div class="inputSpan Intrested-more-field" id="plot" style="display:none;">       
                                   <select class="custom-select form-control decor"name="plot">
                                        <option name="subject" selected disabled>Plot</option>
                                        <option name="subject"value="house">03</option>
                                        <option name="subject"value="plot">04</option>
                                        <option name="subject" value="commercial">20</option>
                                    </select>
                                </div>
                                <div class="Intrested-more-field" id="commercial" style="display:none;">
                                    <div class="inputSpan">
                                        <input name="society" type="text" class="form-control" placeholder="Society">
                                    </div>
                                    <div class="inputSpan mt-21">
                                        <input name="cda" type="text" class="form-control" placeholder="CDA">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="society_intrested" type="text" class="form-control" required placeholder="Society Intrested">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan">
                                    <input name="sector_area" type="text" class="form-control" required placeholder="Sector/Area">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan Intrested-more-field" id="down_payment">       
                                    <select class="custom-select form-control decor"name="down_payment">
                                        <option name="subject" selected disabled>Down payment</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-6 mt-21">
                                <div class="inputSpan Intrested-more-field" id="monthly_installment">       
                                    <select class="custom-select form-control decor"name="monthly_installment">
                                        <option name="subject" selected disabled>Monthly Installment</option>
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
                                <button class="formSubmitBtn">Submit</button>
                            </div>
                        </div>
                        </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
<script src="{{asset('new/assets/js/app.js')}}"></script>
  <script src="{{asset('new/toastr/toastr.min.js')}}"></script>
    <script>
        $(document).ready(() => {
            $('#intrested_dropdown').change((e) => {
               $('.Intrested-more-field').hide();
               $('.Intrested-more-field input').val("");
               $('#'+e.target.value).show();
            })
            $('form').onsubmiut(()=>{
                return true;
            })
        })
    </script>
  <script>$(window).on('load', function(){
    @if(Session::has('emailsend'))
    </script>
    <script>
swal("Thank You","A member of the team will be in touch with you shortly");
  </script>

  @endif
  @toastr_render
@endsection