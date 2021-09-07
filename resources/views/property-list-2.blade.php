@extends('layouts.header')
@section("content")
<div class="property_list">
<div class="propertyBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area">
                    <h1>Properties Detail</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Properties List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="filterBoxDiv">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="filterDiv">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#filterNav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                            </div>
                            <div class="collapse navbar-collapse" id="filterNav">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <input type="text" class="commonInput" placeholder="Enter Location">
                                    </div>
                                    <div class="col-lg-2">
                                    <select class="commonInput form-control select2-show-search border-bottom-0 search_bar_city select2-hidden-accessible" id="sale_city_type" data-placeholder="City" data-select2-id="sale_city_type" tabindex="-1" aria-hidden="true">
                                                    <option value="false" data-select2-id="2">Choose City</option>
                                                    <option value="1" data-select2-id="3">Lahore</option>
                                                    <option value="2" data-select2-id="4">Karachi</option>
                                                    <option value="3" data-select2-id="5">Islamabad</option>
                                                    <option value="4" data-select2-id="6">Multan</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <ul class="buttonList">
                                            <li class="rentLi"> 
                                                <a>Rent</a>
                                            </li>
                                            <li class="saleLi">
                                                <a>Sale</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="customDropDown priceDropDown">
                                            <div class="textArrow commonInput">
                                                <p>Price</p>
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </div>
                                            <div class="dropDownDiv priceDropDownDiv">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="commonInput" placeholder="Min">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="commonInput" placeholder="Max">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <li>Any</li>
                                                            <li>5,000 >> 10,000</li>
                                                            <li>20,000 >> 40,000</li>
                                                            <li>80,000 >> 160,000</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="customDropDown bedDropDown">
                                            <div class="textArrow commonInput">
                                                <p>Bedrooms</p>
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </div>
                                            <div class="dropDownDiv bedDropDownDiv">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <ul class="bedList">
                                                            <li>Any</li>
                                                            <li>1+</li>
                                                            <li>2+</li>
                                                            <li>3+</li>
                                                            <li>4+</li>
                                                            <li>5+</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="customDropDown typeDropDown">
                                            <div class="textArrow commonInput">
                                                <p>Property Type</p>
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </div>
                                            <div class="dropDownDiv typeDropDownDiv">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="">Home</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>House</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Flate</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Uper Portion</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Lower Portion</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Fram House</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Room</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="">Plots</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>Residential Plot</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Commercial Plot</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Agricultural Land</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Industrial Land</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Plot File</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Plot Form</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="">Commercial</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p>Office</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Shop</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Warehouse</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Factory</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Building</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p>Other</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="searchBtn">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                            <!-- <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                                </ul>
                                </li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                            </ul> -->
                            </div>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="propertyListDiv">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="filterBox">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Total Property Find is: <span class="theme-cl">207</span></h4>
                            </div>
                            <div class="col-lg-6 text-right">
                                <select name="" id=""  class="inputCommon">
                                    <option value="">Latest</option>
                                    <option value="">Most View</option>
                                    <option value="">Most Popular</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset('assets/img/p-1.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <span class="property-type">For Sale</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">Resort Valley Ocs</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>3848 Swick Hill, New Orleans</span>
                                        </div>
                                        <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> 1</li>
                                            <li><strong>Bath:</strong> 1</li>
                                            <li><strong>Sqft:</strong> 3700</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">$632,580</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset('assets/img/p-2.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <span class="property-type">For Sale</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">Resort Valley Ocs</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>3848 Swick Hill, New Orleans</span>
                                        </div>
                                        <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> 1</li>
                                            <li><strong>Bath:</strong> 1</li>
                                            <li><strong>Sqft:</strong> 3700</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">$632,580</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset('assets/img/p-3.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <span class="property-type">For Sale</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">Resort Valley Ocs</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>3848 Swick Hill, New Orleans</span>
                                        </div>
                                        <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> 1</li>
                                            <li><strong>Bath:</strong> 1</li>
                                            <li><strong>Sqft:</strong> 3700</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">$632,580</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset('assets/img/p-4.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <span class="property-type">For Sale</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">Resort Valley Ocs</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>3848 Swick Hill, New Orleans</span>
                                        </div>
                                        <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> 1</li>
                                            <li><strong>Bath:</strong> 1</li>
                                            <li><strong>Sqft:</strong> 3700</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">$632,580</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset('assets/img/p-5.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <span class="property-type">For Sale</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">Resort Valley Ocs</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>3848 Swick Hill, New Orleans</span>
                                        </div>
                                        <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> 1</li>
                                            <li><strong>Bath:</strong> 1</li>
                                            <li><strong>Sqft:</strong> 3700</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">$632,580</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="simple-sideBar height500">
                        <marquee behavior="" direction="up" loop="infinite">
                            <img src="{{asset('assets/img/302_Patiala_Associates_I8.jpg@5b6943537a4b9.jpg')}}" alt="">
                            <img src="{{asset('assets/img/4794_Pak_Associates.jpg')}}" alt="">
                            <img src="{{asset('assets/img/302_Patiala_Associates_I8.jpg@5b6943537a4b9.jpg')}}" alt="">
                            <img src="{{asset('assets/img/4794_Pak_Associates.jpg')}}" alt="">
                            <img src="{{asset('assets/img/302_Patiala_Associates_I8.jpg@5b6943537a4b9.jpg')}}" alt="">
                            <img src="{{asset('assets/img/4794_Pak_Associates.jpg')}}" alt="">
                            <img src="{{asset('assets/img/302_Patiala_Associates_I8.jpg@5b6943537a4b9.jpg')}}" alt="">
                            <img src="{{asset('assets/img/4794_Pak_Associates.jpg')}}" alt="">
                            <img src="{{asset('assets/img/302_Patiala_Associates_I8.jpg@5b6943537a4b9.jpg')}}" alt="">
                            <img src="{{asset('assets/img/4794_Pak_Associates.jpg')}}" alt="">
                        </marquee>
                    </div>
                    <div class="simple-sideBar">
                        <h5 class="mb-3">Category</h5>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Single Family <span>(45)</span></a></li>
                            <li><a href="#">Apartment <span>(21)</span> </a></li>
                            <li><a href="#">Condo <span>(23)</span></a></li>
                            <li><a href="#">Multi Family <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection