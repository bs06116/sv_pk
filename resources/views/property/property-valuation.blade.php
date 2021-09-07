@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <div class="property_list">
        <div class="propertyHeader">
            <div class="aboutnew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ipt-title">Valuation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutInfoMain valuationDiv">
                        <div class="data">
                            {{-- <h3>WHAT IS Shinnyview.com?</h3>
                            --}}
                            <div class="first">
                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> If you want to sell your house residential / commercial and want to get valuation for
                                    the property, you can search through ShinnyView.com or use our “Contact Us” page and we
                                    will connect you with the right estate agent.
                                </p>
                            </div>
                            <div class="second">
                                <p>I hope this should help you. If you need any further information regarding this feedback
                                    please do let me know.<i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p>
                            </div>
                            <a href="{{url('contact')}}" class="contactUsLink">Contact Us <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
