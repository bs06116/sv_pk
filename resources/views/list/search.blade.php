@extends('layouts.footer')
@extends('layouts.header')
<style>
 i.fa.fa-camera {
    color: #1b1a2f;
}
#pagin li a {
    padding: 3px !important;
}
.propertyInfo .listing-detail-wrapper .listing-short-detail .listing-name {
    font-size: 16px !important;
}
    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: #8a6d3b !important;
        cursor: pointer;
    }

    .addReadMore.showlesscontent .SecSec,
    .addReadMore.showlesscontent .readLess {
        display: none;
    }

    .addReadMore.showmorecontent .readMore {
        display: none;
    }

    .addReadMore .readMore,
    .addReadMore .readLess {
        font-weight: bold;
        margin-left: 2px;
        color: blue;
        cursor: pointer;
    }

    .addReadMoreWrapTxt.showmorecontent .SecSec,
    .addReadMoreWrapTxt.showmorecontent .readLess {
        display: block;
    }


    .toggledText {

        overflow: hidden;
    }

    .toggledText.toggle {
        height: auto;
    }

    .readless-txt,
    .toggledText.toggle~#readmore span.readmore-txt {
        display: none;
    }

    .toggledText.toggle~#readmore span.readless-txt {
        display: block;
    }
</style>
@section('content')
    <div class="property_list">
        <div class="propertyHeader">
            <div class="aboutnew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ipt-title">Property List</h2>
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
                                <h4>Properties <span class="theme-cl"></span></h4>
                            </div>
                            <div class="col-lg-6 text-right">
                                    <label class="col-lg-6 text-right" style="padding:10px 0px 10px;">Sort by:</label>
                                    <select name="" id="filter_select" class="inputCommon">
                                         
                                        <option disabled selected>Relevance</option>
                                    <option value="">Most Recent</option>
                                    <option value="">Lowest price</option>
                                    <option value="">Highest price</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                      
                                @foreach ($seller as $seller)
                                
                            
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
                                     @php
                                                         $count1=App\Models\Seller::where('id',$seller->id)->count();
                                                         $count2=App\Models\Gallery::where('seller_id',$seller->id)->count();
                                                         $sum=$count1+$count2
                                                    @endphp
<span class="property-type" style="left: 250px;top: 13px;">{{ ucfirst($seller->type) }} </span>
 
                                         <span class="tag"style="position: absolute; position: absolute;right: 242px;top: 14px;color: #0f0f0f;padding: 4px 15px;border-radius: 50px;font-size: 12px;text-transform: uppercase;background: #1010108f;"><a href=""> <i class="fa fa-camera" aria-hidden="true" style="color: #f9f9fb;">&nbsp;&nbsp;<b>{{ $sum }}</b>
                                            
                                         </i></a>
                                                  
                                         </span>
                                </div>
                               <div class="propertyInfo" style="margin-top: -8px;">
    <div class="listing-detail-wrapper">
        <div class="listing-short-detail">
            <h4 class="listing-name">
                <a href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
            </h4>
            <span class="listing-location"><i
                    class="fa fa-map-marker"></i>{{ ucfirst($seller->address) }},
                {{ ucfirst($seller->city) }}</span>
        </div>
        {{-- <div class="list-author">
            <a href="">
                <img src="{{ asset('assets/img/avatar-8.jpg') }}" alt="">
            </a>
        </div> --}}
    </div>
    <div class="listing-features-info">
       <ul style="
margin-top: -14px;
">
            @if ($seller->bedroom!=0)
            <li><strong><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;</strong> {{ ucfirst($seller->bedroom) }}</li>
            @endif
             @if ($seller->Bath!= 0)
            <li><strong><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;</strong> {{ ucfirst($seller->Bath) }}</li>
            @endif
             @if ($seller->size!= 0)
            <li><strong><i class="fa fa-arrows-alt text-muted mr-1"></i>&nbsp;{{ ucfirst($seller->size) }}</strong>&nbsp;&nbsp;{{ ucfirst($seller->area) }}</li>
            @endif
        </ul>
<ul>
        <span class="addReadMore showlesscontent" style="margin-top: -18px;">
        {{ ucfirst($seller->description) }}
        </span>
</ul>                                            
   
    </div>
  
   
    <div class="listing-footer-wrapper">
        <div class="listing-price">
            @php
                                                            $converter = new App\Convertmodel();
                                                            $price = $converter->numberTowords($seller->price)    
                                                        @endphp
                                                    
                                                    <h4 class="list-pr">PKR:&nbsp;{{$price}}</h4>
        </div>
        <div class="listing-detail-btn">
            <a href="{{ route('seller.show', $seller->id) }}" class="more-btn">More
                Info</a>
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
                                        <i class="fa fa-usd"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-with-icon">
                                        <input type="text"name="maxnprice"id="maxprice" class="form-control" placeholder="Max">
                                        <i class="fa fa-usd"></i>
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
                                    <option value="Rent">For Rental</option>
                                    <option value="Sale">For Sale</option>
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
    function AddReadMore() {
        //This limit you can set after how much characters you want to show Read More.
        var carLmt = 150;
        // Text to show when text is collapsed
        var readMoreTxt = " ... ";
        // Text to show when text is expanded   
        var readLessTxt = "...";
        //Traverse all selectors with this class and manupulate HTML part to show Read More
        $(".addReadMore").each(function() {
            if ($(this).find(".firstSec").length)
                return;
            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf +
                    "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt +
                    "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
        });
        //Read More and Read Less Click Event binding
        $(document).on("click", ".readMore,.readLess", function() {
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        });
    }
    $(function() {
        //Calling function after Page Load
        AddReadMore();
    });

</script>
@endsection