@extends('layouts.header')
@section("content")
<div class="property_list">
    <div class="propertyHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="ipt-title">Property List</h2>
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
                                <h4>Total Properties<span class="theme-cl"></span></h4>
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
                            @foreach (App\Models\Seller::all() as $seller)
                                
                            
                            <div class="listCard">
                                <div class="propertyImage">
                                    <div class="watermark">
                                    <a>
                                        <img src="{{asset($seller->image)}}" alt="">
                                    </a>
                                    <span class="property-type">{{ ucfirst($seller->type) }}</span>
                                </div>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="">{{ ucfirst($seller->name) }}</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>{{ ucfirst($seller->address) }}, {{ ucfirst($seller->city) }}</span>
                                        </div>
                                        {{-- <div class="list-author">
                                            <a href="">
                                                <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">
                                            </a>
                                        </div> --}}
                                    </div>
                                    <div class="listing-features-info">
                                        <ul>
                                            <li><strong>Bed:</strong> {{ ucfirst($seller->bedroom) }}</li>
                                            <li><strong>Bath:</strong> {{ ucfirst($seller->Bath) }}</li>
                                            <li><strong>Sqft:</strong> {{ ucfirst($seller->area) }}</li>
                                        </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">PKR:{{ ucfirst($seller->price) }}</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="{{route('seller.show',$seller->id)}}" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="simple-sideBar">
                        <h5 class="mb-3">Find New Property</h5>
                        <form action="">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Neighborhood">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Location">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Min">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Max">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select id="bedrooms" class="form-control select2-hidden-accessible" data-select2-id="bedrooms" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <i class="fa fa-bed"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select id="ptypes" class="form-control select2-hidden-accessible" data-select2-id="ptypes" tabindex="-1" aria-hidden="true">
										<option value="" data-select2-id="6">Property Type</option>
										<option value="1">Any Type</option>
										<option value="2">For Rental</option>
										<option value="3">For Sale</option>
									</select>
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select id="cities" class="form-control select2-hidden-accessible" data-select2-id="cities" tabindex="-1" aria-hidden="true">
										<option value="" data-select2-id="8">All Cities</option>
										<option value="1">Los Angeles, CA</option>
										<option value="2">New York City, NY</option>
										<option value="3">Chicago, IL</option>
										<option value="4">Houston, TX</option>
										<option value="5">Philadelphia, PA</option>
										<option value="6">San Antonio, TX</option>
										<option value="7">San Jose, CA</option>
									</select>
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Custom Price
                                </label>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Min Price">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Max Price">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Area
                                </label>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Min Area">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Max Area">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <button class="btn btn-theme full-width">Find New Home</button>
                        </form>
                        <hr>
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