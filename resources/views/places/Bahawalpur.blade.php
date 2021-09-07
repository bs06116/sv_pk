@extends('layouts.footer')
@extends('layouts.header')
<style>
    .current {
     color: green;
   }
   #pagin{
           padding: 0px;
       margin: 50px 0px 0px;
   }
   #pagin li {
     display: inline-block;
     
   }
   #pagin li a.current{
       text-align: center;
       vertical-align: middle;
       background: #8a6d3b;
       padding: 5px 12px;
       color: #fff;
   }
   #pagin li a{
       text-align: center;
       vertical-align: middle;
       background: #80808038;
       padding: 5px 12px;
       color: #000;
   }

   </style>

@section("content")
<div class="property_list">
    <div class="propertyHeader">
        <div class="Bahawalpur">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="ipt-title">Bahawalpur List</h2>
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
                                @php
                                    $count=App\Models\Seller::where('city','=','bahawalpur')->count();

                                    @endphp
                                   <h4>Total Properties:<span class="theme-cl">{{ $count }}</span></h4>
                                </div>
                                         <div class="col-lg-6 text-right">
                                    <label class="col-lg-6 text-right" style="padding:10px 0px 10px;">Sort by:</label>
                                    <select name="" id="filter_select" class="inputCommon">
                                         
                                        <option disabled selected>Relevance</option>
                                         
                                        <option disabled selected>Relevance</option>
                                        <option  @php if($filter=="lowest-price"){echo "selected"; } @endphp value="{{route('Bahawalpur',['filter'=>'lowest-price'])}}">Lowest price</option>
                                        <option @php if($filter=="highest-price"){echo "selected"; } @endphp  value="{{route('Bahawalpur',['filter'=>'highest-price'])}}">Highest price</option>
                                        <option @php if($filter=="most-recent"){echo "selected"; } @endphp   value="{{route('Bahawalpur',['filter'=>'most-recent'])}}">Most Recent</option>
                                    </select>
                                </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                           
                                @foreach ($cities as $seller)
                                
                            
                            <div class="listCard">
                                <div class="propertyImage">
                                    <a>
                                        <img src="{{asset($seller->image)}}" alt="">
                                    </a>
                                    {{-- <div class="listing-like-top">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div> --}}
                                    {{-- <div class="listing-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div> --}}
                                    <span class="property-type">{{ ucfirst($seller->type) }}</span>
                                </div>
                                <div class="propertyInfo">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name">
                                                <a href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                            </h4>
                                            <span class="listing-location"><i class="fa fa-map-marker"></i>{{ ucfirst($seller->address) }}, {{ ucfirst($seller->city) }}</span>
                                        </div>
                                        <!--<div class="list-author">-->
                                        <!--    <a href="">-->
                                        <!--        <img src="{{asset('assets/img/avatar-8.jpg')}}" alt="">-->
                                        <!--    </a>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="listing-features-info">
                                       <ul>
                                                    @if ($seller->bedroom!=0)
                                                    <li><strong>Bed:</strong> {{ ucfirst($seller->bedroom) }}</li>
                                                    @endif
                                                     @if ($seller->Bath!= 0)
                                                    <li><strong>Bath:</strong> {{ ucfirst($seller->Bath) }}</li>
                                                    @endif
                                                     @if ($seller->size!= 0)
                                                    <li><strong>{{ ucfirst($seller->size) }}</strong>&nbsp;&nbsp;{{ ucfirst($seller->area) }}</li>
                                                    @endif
                                                </ul>
                                        
                                    </div>
                                    <div class="listing-footer-wrapper">
                                            <div class="listing-price">
                                                <h4 class="list-pr">PKR:{{ number_format($seller->price) }}</h4>
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="{{route('seller.show',$seller->id)}}" class="more-btn">More Info</a>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            @endforeach
                            <ul id="pagin">
         
                              </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4">
                    <div class="simple-sideBar">
                        <h5 class="mb-3">Find New Property</h5>
                        <form method="post" action="{{route('search')}}"enctype="multipart/form-data">
                            @method('GET')
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text"name="city"id="autocomplete-input" class="form-control" placeholder="City">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Location">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text"name="minprice"id="minprice" class="form-control" placeholder="Min">
                                            <!--<i class="pkr"></i>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text"name="maxnprice"id="maxprice" class="form-control" placeholder="Max">
                                            <!--<i class="fa fa-usd"></i>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <label for="bedroom">Bed Rooms</label>
                                    <input type="text"name="bedroom"id="bedroom" class="form-control" placeholder="Bed Rooms"> <i class="fa fa-bed"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select name="purpose" class="form-control select2-hidden-accessible">
                                    {{-- <select id="ptypes" class="form-control select2-hidden-accessible" data-select2-id="ptypes" tabindex="-1" aria-hidden="true"> --}}
										<option value="type" data-select2-id="6">Property Type</option>
										<option value="rent">For Rental</option>
										<option value="sale">For Sale</option>
									</select>
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                            {{-- <div class="form-group">
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
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="">
                                    Custom Price
                                </label>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Min Price">
                                            <!--<i class="fa fa-usd"></i>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Max Price">
                                            <!--<i class="fa fa-usd"></i>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="area">
                                    Area
                                </label>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text"name="minarea"id="minarea" class="form-control" placeholder="Min Area">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text"name="minarea"id="minarea" class="form-control" placeholder="Max Area">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <button class="btn btn-theme full-width">Find New Home</button>
                        </form>
                        <hr>
                        {{-- <h5 class="mb-3">Category</h5> --}}
                        {{-- <ul class="list-unstyled list-cat">
                            <li><a href="#">Single Family <span>(45)</span></a></li>
                            <li><a href="#">Apartment <span>(21)</span> </a></li>
                            <li><a href="#">Condo <span>(23)</span></a></li>
                            <li><a href="#">Multi Family <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul> --}}
                    </div>
                </div>
        </div>
    </div>
</div>
<script>

    pageSize = 8;
    
        var pageCount =  $(".listCard").length / pageSize;
        
         for(var i = 0 ; i<pageCount;i++){
            
           $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
         }
            $("#pagin li").first().find("a").addClass("current")
        showPage = function(page) {
            $(".listCard").hide();
            $(".listCard").each(function(n) {
                if (n >= pageSize * (page - 1) && n < pageSize * page)
                    $(this).show();
            });        
        }
        
        showPage(1);
    
        $("#pagin li a").click(function() {
            $("#pagin li a").removeClass("current");
            $(this).addClass("current");
            showPage(parseInt($(this).text())) 
        });
    </script>
    
    <script>
    $(function(){
      // bind change event to select
      $('#filter_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>
    
@endsection