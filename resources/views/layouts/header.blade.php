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
<style>

.testimonialDiv .testimonial-info-box {
    margin: 50px 20px 20px !important;

}
.slick-dots{
    display:none !important;
}
.agent-img img {
    width: 100px;
    height: 83px;
}
.swal-button:not([disabled]):hover {
    background-color: #715b39;
}
.swal-footer {
    text-align: right;
    padding-top: 13px;
    margin-top: 13px;
    padding: 13px 16px;
    border-radius: inherit;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.propertyListDiv .filterBox h4>span {
    color: #8a6d3b;
    margin-left: 4px;
}
.testimonialDiv {
    padding: 19px 0px !important;
}
.mfp-counter {
    color: aliceblue !important;
}
.mfp-wrap img {
    width: 98% !important;
}
.mfp-wrap .mfp-figure img {
    height: 84% !important;
}
.watermark img {
  width: 100%;
}
.watermark {
  position: relative;
  color:#e7e7e7;
}
.watermark::after {
  width: 100%;
}
.watermark::after {
 content: 'Shinnyview';
    position: absolute;
    bottom: 84px;
    right: 0px;
    opacity: 0.5;
    /* font-size: 3.5em; */
    left: 58px;
    font-size: 38px;
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
.invalid-feedback {
    color: red;
}
body .container {
    width: 100%;
}
.propertyListDiv {
    padding: 28px 0px !important;
}
.featureDiv .tabContent .featuresBox .detailBox,
.properties-details-page .detailBox {
    padding: 20px 20px;
    margin-top: -35px !important;
    margin-bottom: -38px !important;
}
.register-div .img-dive::before {
    border-bottom: 553px solid white !important;
}
.img-dive:before{
        border-bottom: 320px solid white !important;
}
.featureDiv .tabContent .featuresBox ul.facilities-list.clearfix li span{
    margin-left: 0 !important;
}
.featureDiv .tabContent .featuresBox ul{
    padding:3px 10px !important;
}
.featureDiv .tabContent .featuresBox ul.facilities-list.clearfix li{
    margin-right:20px !important;
}
.footer p {
    color: #fbfdff;
    text-align: justify !important;
}
.sellproperty span a{
    color: white !important;
}
li.sellproperty {
    margin-top: 12px;
}
.time:before{display:none !important;
}
.m-t-30{
    margin-top: 30px;
}
.galleryDiv .container{
    width: auto;
}
.galleryDiv .mySlides,.galleryDiv .mySlides img{
    height: 425px;
}
/** {*/
/*  box-sizing: border-box;*/
/*}*/
/** {*/
/*    background-image: url() !important;*/
/*}*/



img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
p {
	font-size: 14px;
	line-height: auto !important;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 70px !important;
  
margin-top:10px;  
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
  max-height:50px;
}

.active,
.demo:hover {
  opacity: 1;
}


p.hoursText {
    left: 3px;
}

.time {
        width: 100%;
    max-width: 60%;
    margin: auto;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
}
.commonDiv{
width: 100%;
margin: 0px 1px;
position:relative;
max-width:8%;
}
.demoTimer{
        width: 100%;
    background-color: #1B1A2F;
    margin: 0;
    height: 60px !important;
    position: relative;
    padding: 10px 0px 20px;
    margin: 0px 5px;
}
/*.time:before {
        content: "SHINNY VIEW |";
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    font-weight: 600;
    max-width: 45%;
    padding-top: 8px;
    
}*/
.topbar .navbar-custom ul:first-child{padding: 20px 0 0 0 !important}
@media only screen and (max-width: 1300px) {
.dayText{font-size:11px !important;}
    
}
@media only screen and (min-width: 1200px) and (max-width: 1300px) {
p.dayText.secText{left:10px !important;}
}
@media only screen and (min-width: 1100px) and (max-width: 1200px) {
p.dayText.secText{left:17px !important;}
p.dayText.minText{left:22px !important;}
p.hoursText{left:23px !important;}
}
@media only screen and (min-width: 992px) and (max-width: 1100px) {
p.dayText.secText{left:13px !important;}
p.dayText.minText{left:19px !important;}
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
p.dayText.secText{left:17px !important;}
}
@media only screen and (min-width: 500px) and (max-width: 600px) {
p.hoursText{left: 15px !important;}
}
@media only screen and (min-width: 400px) and (max-width: 500px) {
p.hoursText{left: 12px !important;}
}

@media only screen and (max-width: 1200px) {
    .register-div .login .box{
            margin-top: 80px !important;
            ackground-color: transparent;
    }
    .img-dive p{
        margin:0px !important;
        
    }
    p.loginnnn{
        bottom:38px !important;
    }
    .img-dive{
        height:40% !important;
    }
    .ipt-title span{
        margin:0px !important;
    }
    .propertyHeader h1 span{
        float:left !important;
    }
    .contactInfo .inputSpan{
        margin-bottom:20px;
    }
    .lineChange::before{
        right:0px !important;
    }
    .contactInfo .commonHeading{
        text-align:center;
    }
    .mostPopularDiv .propertyDiv{
        margin-bottom:40px;
    }
    .time{
        max-width:80%;
    }
    .marketInfoDiv .feature{
            margin-bottom: 20px;
    }
}
@media only screen and (max-width: 1075px) {
    #header .nav li>a{
        padding:10px !important;
    }
    .footersss span{
        margin-left:0px !important;
    }
    
}
@media only screen and (max-width: 992px) {
    #header .nav {
    padding-left: 5px;
}
    .sellproperty span{
       font-size: 8px !important;
       font-weight:400 !important;
    }
    .nav-user img{
        width:20px;
        height:20px;
    }
    .footersss span{
        margin:0px;
    }
    .footersss{
        text-align:center;
    }
    .popularPlaceDiv .imgBg{
        background-position:center center;
    }
    .mostPopularDiv{
        padding-left:0px;
        padding-right:0px;
    }
    #header .nav li>a {
    padding: 10px 5px !important;
    font-size: 12px;
    font-weight: 400;
}
   /* .time:before {
        max-width: 50%;
        justify-content: left;
    }
    .time:after {
        left: 145px !important;
    }*/
    .commonDiv{
        max-width:10%;
    }
    p#demo,p#demoHours,p#demoMin,p#demoSec {
        padding-top: 15px !important;
        font-size: 18px !important;
    }
    .dayText{
        font-size:10px !important;
        left:28px !important;
    }
    
    p.dayText.minText {
        left: 20px !important;
    }
    p.dayText.secText {
        left: -7px !important;
    }

    
}
@media only screen and (max-width: 768px){
    .aboutInfoMain .data h3{
        font-size:18px;
    }
    .aboutnn>img{
        width:100%;
    }
    .aboutInfoMain{
        min-width:100%;  
        padding:25px;
    }
    #carousel{
        max-height:100% !important;
    }
    .properties-details-page{
        padding: 100px 20px 70px;
    }
    .ipt-title span{
        margin-left:0px !important;
    }
    .aboutnew .ipt-title{
        text-align:center;
    }
    .propertyListDiv .propertyImage a>img{
        height:100%;
            max-height: 100%;
    }
    .propertyInfo .listing-detail-wrapper .listing-short-detail .listing-name>a{
        font-size:16px;
    }
    .propertyInfo .listing-price .list-pr,.propertyInfo .listing-detail-wrapper .listing-short-detail .listing-location{
            font-size: 9px;
    }
    .propertyInfo .listing-detail-btn .more-btn{
        padding:5px !important;
            font-size: 12px;
    }
    .mostPopularDiv {
    padding-left: 20px;
    padding-right: 20px;
}
    .commonHeading{
        padding:0 0px 20px;   
    }
    .footersss span{
        margin-left:0px !important;
    }
    .commonDiv {
        max-width: 12% !important;
    }
    .homeBanner .tabPillsDiv{
        max-width:80%;
    }
    .time span{
        font-size:12px !important;
    }
    .valuationDiv{
        min-width:100% !important;
    }
    .property-type{
            right: 5px!important;
            left: 238px!important;
    }
.tag{
        right: 231px!important;
}
}
@media only screen and (max-width: 600px) {

.propertyInfo .listing-footer-wrapper{
    border:none;
}
    .propertyListDiv .propertyImage{
        min-height:200px;
    }
.time {
    max-width: 90%;
}
/*.time:after {
    left: 110px !important;
}*/
p#demo, p#demoHours, p#demoMin, p#demoSec {
    padding-top: 21px !important;
    font-size: 14px !important;
}
.commonDiv {
    max-width: 9% !important;
}
/* .time:before,.time:after{
    font-size:10px;
}
.time:after{
    top:28px;
}*/
.dayText {
    font-size: 9px !important;
    left: 18px !important;
}
p.dayText.minText {
    left: 12px !important;
}
p.dayText.secText {
    left: 9px !important;
}
.property-type{
            right: 5px!important;
            left: 176px!important;
    }
.tag{
        right: 170px!important;
}
}
@media only screen and (max-width: 480px) {
    .simple-sidebar .list-unstyled li a{
        font-size:12px;
    }
    .flex-direction-nav .flex-next,.flex-direction-nav .flex-prev{
        top:90px;
    }
.homeBanner .tabPillsDiv{
    max-width:100% !important;
}
    .time {
    max-width: 100%;
}
p#demo {
    padding-top: 14px;
    font-size: 18px !important;
}
p#demoHours {
    padding-right: 34px;
    padding-top: 10px;
    font-size: 18px !important;
}
p#demoMin {
    padding-top: 10px;
    font-size: 18px !important;
}
p#demoSec {
    padding-top: 10px;
    font-size: 18px !important;
      
}
.dayText {
    position: absolute;
    color: #fff;
    top: 45px !important;
    left: 15px !important;
    font-size: 6px !important;
    z-index: 99999999;
}
p.hoursText {
    left:11px !important;
    font-size: 6px !important;
}
p.dayText.minText {
    left: 9px !important;
    font-size: 6px;
}
p.dayText.secText {
    left: 8px !important;
    font-size: 6px;
}
.property-type{
            right: 5px!important;
            left: 131px!important;
    }
.tag{
            right: 140px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}

}
@media only screen and (max-width: 416px) {
    .property-type{
            left: 104px!important;
            top: 14px !important;
    }
    .tag{
            right: 112px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
}
@media only screen and (max-width: 411px) {
    .property-type{
            left: 104px!important;
            top: 11px !important;
    }
    .tag{
            right: 112px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
}
@media only screen and (max-width: 375px) {
    .property-type{
            left: 93px!important;
             top: 16px !important;
    }
    .tag{
            right: 97px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
}
@media only screen and (max-width: 360px) {
    .property-type{
            left: 84px!important;
    }
    .tag{
            right: 91px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
}

@media only screen and (max-width: 320px) {
    .property-type{
            left: 69px!important;
    }
    .tag{
            right: 76px!important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
}


/*
.time:after{
    content: "FREE TRIAL END IN :";
    position: absolute;
    top: 25px;
    left: 327px;
    font-weight: 600;
    color:red;
}*/


p.dayText.minText {
    left: -9px;
}
p.dayText.secText{
left:-7px;
}
.dayText{
        position: absolute;
    color: #fff;
    top: 41px;
    left: 25px;
    font-size: 11px;
    z-index: 99999999;
}
.form-group.left {
    margin-right: 10px;
}
.white-bgs {
    background-color: #fff;
    width: 100%;
    max-width: 100%;
    height: 550px;
    margin: auto;
    border-radius: 5px;
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
}
.form-group.right {
    margin-right: 10px;
}
.register-div .box .textRemeber {
    position: relative;
    top: 0px;
    left: 0px;
    font-size: 16px !important;
}
p.loginnnn {
    /* margin-top: 0px;
       color: #8a6d3b; */
    font-size: 41px;
    color: white;
    margin-left: 37px;
}
p#demoHours {
    padding-right: 34px;
            padding-top: 14px;
    font-size: 21px
}
p#demo{ 
            padding-top: 14px;
    font-size: 21px
}

p#demoMin {
    padding-right: 48px;
            padding-top: 14px;
    font-size: 21px
}
p#demoSec {
    padding-right: 47px;
            padding-top: 14px;
    font-size: 21px
}
form.estate {
    color: #1b1a2f;
}

.Bahawalpur {
    background-image: url(assets/img/bhp.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.islamabad {
    background-image: url(assets/img/Isb.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.lhr {
    background-image: url(assets/img/lhr.jpg);
    background-position: bottom!important;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    background-position: bottom!important;
    color: white;
}

.karachi {
    background-image: url(assets/img/khi.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Quetta {
    background-image: url(assets/img/quta1.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.larhoreee {
    background-image: url(assets/img/banner2.jpeg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}
.multan {
    background-image: url(assets/img/mtn1.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Jhelum {
    background-image: url(assets/img/jhm.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Chakwal {
    background-image: url(assets/img/chk.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Gujranwala {
    background-image: url(assets/img/guj.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Gwadar {
    background-image: url(assets/img/gdr.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.peshwar {
    background-image: url(assets/img/pesh.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}

.Sialkot {
    background-image: url(assets/img/sial1.jpg);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: inherit;
    padding: 150px 0px 150px;
    height: 355px;
    width: 100%;
    color: white;
}
img.bar-new {
        height: auto;
    width: 100%;
    max-width: 136px;
    margin: auto;
    margin-top: 23px;
}

</style>
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
