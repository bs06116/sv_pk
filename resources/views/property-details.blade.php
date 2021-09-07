@extends('layouts.footer')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('assets/new/plugins/lightbox/lightgallery.css') }} ">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="{{ asset('assets/new/css/icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/new/css/all.css') }}" rel="stylesheet" type="text/css" />


{{-- <link href="../assets/new/css/style.css"  rel="stylesheet" /> --}}

@extends('layouts.header')

<style>
.simple-sideBar img {
    margin-bottom: -75px !important;
}
.list-author a>img {
    border-radius: 100%;
}
.list-author a>img {
    max-width: 70px !important;
}
.list-author a>img {
   
    
    margin-top: 1px;
    margin-right: 102px;
    border: solid;
    border-color: #8a6d3b;
}
    .featureDiv .tabContent .featuresBox .thumbnailImage,
    .properties-details-page .featuresBox .thumbnailImage {
        position: relative;
    }
    .properties-details-page .featuresBox .thumbnailImage {
        width: 100%;
        max-width: 90%;
        margin: auto;
    }

    /* #newRow {
        display: flex !important;
    } */

    /* .thumbnailImage {
        width: 400px !important;
        display: flex !important;
    } */

    .featuresBox {
        margin-left: -15px;
        margin-right: -15px;
    }

    .dayText {
        padding-top: 5px !important;
    }

    #popup {
        position: absolute;
        width: auto;
        height: 30px;
        background: #fe6b1f;
        display: none;
        color: #fff;
        border-radius: 5px
    }

    .msg img {
        position: relative;
        display: block;
        width: 450px;
        border-radius: 5px;
        box-shadow: 0 0 3px #eee;
        transition: all .4s cubic-bezier(.565, -.26, .255, 1.41);
        cursor: default;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none
    }


    .carousel-bg .prev-icon {
        background-color: rgba(0, 0, 0, .7);
        padding: 5px 15px;
        border-radius: 100px;
        font-size: 20px
    }

    .carousel-bg .next-icon {
        background-color: rgba(0, 0, 0, .7);
        padding: 5px 15px;
        border-radius: 100px;
        font-size: 20px
    }

    .banner1 .carousel-inner img {
        width: 100%;
        max-height: 460px
    }

    .banner1 .carousel-item:before {
        content: '';
        display: block;
        position: absolute;
        background: rgba(0, 0, 0, .6);
        width: 100%;
        height: 100%;
        right: 0;
        top: 0
    }

    .banner1 .carousel-control {
        width: 0
    }

    .banner1 .carousel-control.left,
    .banner1 .carousel-control.right {
        opacity: 1;
        background-image: none;
        background-repeat: no-repeat;
        text-shadow: none
    }

    .banner1 .carousel-control.left span {
        padding: 15px
    }

    .banner1 .carousel-control.right span {
        padding: 15px
    }

    .banner1 .carousel-control .glyphicon-chevron-left,
    .banner1 .carousel-control .glyphicon-chevron-right,
    .banner1 .carousel-control .icon-next,
    .banner1 .carousel-control .icon-prev {
        position: absolute;
        top: 45%;
        z-index: 5;
        display: inline-block
    }

    .banner1 .carousel-control .glyphicon-chevron-left,
    .banner1 .carousel-control .icon-prev {
        left: 0
    }

    .banner1 .carousel-control .glyphicon-chevron-right,
    .banner1 .carousel-control .icon-next {
        right: 0
    }

    .banner1 .carousel-control.left span,
    .banner1 .carousel-control.right span {
        background: rgba(255, 255, 255, .1);
        color: #fff
    }

    .banner1 .carousel-control.left span:hover,
    .banner1 .carousel-control.right span:hover {
        background: rgba(255, 255, 255, .3)
    }

    .banner1 .header-text {
        position: absolute;
        left: 0;
        right: 0;
        color: #fff
    }

    .banner1 .slider .header-text {
        top: 29%
    }

    @media (max-width:480px) {
        .banner1 .slider .header-text {
            top: 30% !important
        }

        .banner1 .slider img {
            height: 600px
        }

        .banner1.slider-images .header-text {
            top: 15% !important
        }

        .sptb-2 {
            padding-top: 0 !important;
            padding-bottom: 3rem !important
        }

        .sptb-tab.sptb-2.pt-10 {
            padding-top: 6.5rem !important
        }
    }

    @media (min-width:481px) and (max-width:767px) {
        .banner1 .slider .header-text {
            top: 35% !important
        }

        .banner1 .slider img {
            height: 500px
        }
    }

    @media (min-width:768px) and (max-width:992px) {
        .banner1 .slider .header-text {
            top: 32% !important
        }
    }

    @media (min-width:993px) and (max-width:1240px) {
        .banner1 .slider .header-text {
            top: 23% !important
        }
    }

    .banner1 .header-text h2 {
        font-size: 40px
    }

    .banner1 .header-text h3 {
        font-size: 25px
    }

    .banner1 .header-text h2 span {
        padding: 10px
    }

    .banner1 .header-text h3 span {
        padding: 15px
    }

    .demo-gallery>ul {
        margin-bottom: 0
    }

    .demo-gallery>ul>li {
        float: left;
        margin-bottom: 15px;
        width: 200px;
        border: 0
    }

    .demo-gallery>ul>li a {
        border: 3px solid #fff;
        border-radius: 3px;
        display: block;
        overflow: hidden;
        position: relative;
        float: left
    }

    .demo-gallery>ul>li a>img {
        -webkit-transition: -webkit-transform .15s ease 0;
        -moz-transition: -moz-transform .15s ease 0;
        -o-transition: -o-transform .15s ease 0;
        transition: transform .15s ease 0;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%
    }

    .demo-gallery>ul>li a:hover>img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    .demo-gallery>ul>li a:hover .demo-gallery-poster>img {
        opacity: 1
    }

    .demo-gallery>ul>li a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, .1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color .15s ease 0;
        -o-transition: background-color .15s ease 0;
        transition: background-color .15s ease 0
    }

    .demo-gallery>ul>li a .demo-gallery-poster>img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity .3s ease 0;
        -o-transition: opacity .3s ease 0;
        transition: opacity .3s ease 0
    }

    .demo-gallery>ul>li a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, .5)
    }

    .demo-gallery .justified-gallery>a>img {
        -webkit-transition: -webkit-transform .15s ease 0;
        -moz-transition: -moz-transform .15s ease 0;
        -o-transition: -o-transform .15s ease 0;
        transition: transform .15s ease 0;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%
    }

    .demo-gallery .justified-gallery>a:hover>img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    .demo-gallery .justified-gallery>a:hover .demo-gallery-poster>img {
        opacity: 1
    }

    .demo-gallery .justified-gallery>a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, .1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color .15s ease 0;
        -o-transition: background-color .15s ease 0;
        transition: background-color .15s ease 0
    }

    .demo-gallery .justified-gallery>a .demo-gallery-poster>img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity .3s ease 0;
        -o-transition: opacity .3s ease 0;
        transition: opacity .3s ease 0
    }

    .demo-gallery .justified-gallery>a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, .5)
    }

    .demo-gallery .video .demo-gallery-poster img {
        height: 48px;
        margin-left: -24px;
        margin-top: -24px;
        opacity: .8;
        width: 48px
    }

    .demo-gallery.dark>ul>li a {
        border: 3px solid #04070a
    }

    .home .demo-gallery {
        padding-bottom: 80px
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img {
        width: 100%
    }

    .gallery {
        overflow: hidden;
        position: relative;
        text-align: center;
        box-shadow: 1px 1px 2px #e6e6e6;
        cursor: default
    }

    .gallery .content,
    .gallery .mask {
        position: absolute;
        width: 100%;
        overflow: hidden;
        top: 0;
        left: 0
    }

    .gallery img {
        display: block;
        position: relative
    }

    .gallery .tools {
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 3px;
        background: rgba(0, 0, 0, .35);
        margin: 43px 0 0
    }

    .mask.no-caption .tools {
        margin: 90px 0 0
    }

    .gallery .tools a {
        display: inline-block;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        padding: 0 4px
    }

    .gallery p {
        font-family: 'Roboto', sans-serif;
        font-style: italic;
        font-size: 12px;
        position: relative;
        color: #fff;
        padding: 10px 20px 20px;
        text-align: center
    }

    .gallery a.info {
        display: inline-block;
        text-decoration: none;
        padding: 7px 14px;
        background: #000;
        color: #fff;
        text-transform: uppercase;
        box-shadow: 0 0 1px #000
    }

    .gallery-first img {
        transition: all .2s linear
    }

    .gallery-first .mask {
        opacity: 0;
        background-color: rgba(0, 0, 0, .5);
        transition: all .4s ease-in-out
    }

    .gallery-first .tools {
        transform: translateY(-100px);
        opacity: 0;
        transition: all .2s ease-in-out
    }

    .gallery-first p {
        transform: translateY(100px);
        opacity: 0;
        transition: all .2s linear
    }

    .gallery-first:hover img {
        transform: scale(1.1)
    }

    .gallery-first:hover .mask {
        opacity: 1
    }

    .gallery-first:hover .tools,
    .gallery-first:hover p {
        opacity: 1;
        transform: translateY(0)
    }

    .gallery-first:hover p {
        transition-delay: .1s
    }


    .carousel {
        position: relative
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .carousel-item {
        position: relative;
        display: none;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        transition: -webkit-transform .6s ease;
        transition: transform .6s ease;
        transition: transform .6s ease, -webkit-transform .6s ease;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    @media screen and (prefers-reduced-motion:reduce) {
        .carousel-item {
            transition: none
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block
    }

    .carousel-item-next,
    .carousel-item-prev {
        position: absolute;
        top: 0
    }

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .active.carousel-item-right,
    .carousel-item-next {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    .active.carousel-item-left,
    .carousel-item-prev {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: .6s;
        transition-property: opacity
    }

    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right,
    .carousel-fade .carousel-item.active {
        opacity: 1
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        opacity: 0
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev,
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .6
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9
    }

    .carousel-control-prev {
        left: 0
    }

    .carousel-control-next {
        right: 0
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, .5)
    }

    .carousel-indicators li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators .active {
        background-color: #fff
    }

    .carousel-indicators1 {
        position: absolute;
        right: 0;
        top: 10px;
        left: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators1 li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%
    }

    .carousel .carousel-indicators {
        bottom: -1rem
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        margin: 1px 2px
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff
    }

    .carousel-indicators li.active {
        border: 5px double
    }

    .carousel .carousel-control {
        height: 40px;
        width: 40px;
        background: 0 0;
        margin: auto 0;
        border-radius: 50%;
        background: rgba(0, 0, 0, .6);
        z-index: 999
    }

    .carousel-indicators1 li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators1 li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators1 .active {
        background-color: #fff
    }

    .carousel-indicators2 {
        position: absolute;
        right: 10px;
        top: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-top: 10px;
        list-style: none
    }

    .carousel-indicators2 li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%
    }

    .carousel-indicators2 li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators2 li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators2 .active {
        background-color: #fff
    }

    .carousel-indicators3 {
        position: absolute;
        left: 10px;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-top: 10px;
        list-style: none
    }

    .carousel-indicators3 li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%
    }

    .carousel-indicators3 li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators3 li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators3 .active {
        background-color: #fff
    }

    .carousel-indicators4 {
        position: absolute;
        right: 10px;
        bottom: 0;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-top: 10%;
        list-style: none
    }

    .carousel-indicators4 li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%
    }

    .carousel-indicators4 li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators4 li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators4 .active {
        background-color: #fff
    }

    .carousel-indicators5 {
        position: absolute;
        bottom: 0;
        left: 10px;
        z-index: 15;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        list-style: none
    }

    .carousel-indicators5 li {
        position: relative;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 7px;
        height: 7px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%
    }

    .carousel-indicators5 li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators5 li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-caption {
        display: none
    }

    .demo-gallery>ul>li {
        width: 100% !important
    }

    ul.inbox-pagination li span {
        display: none
    }
    }

    @media (max-width:990px) and (min-width:767px) {
        .carousel-caption {
            top: 10%
        }
    }

    .carousel-indicators5 .active {
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        top: 30%;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center
    }

    .carousel-item-background {
        content: '';
        background: rgba(0, 0, 0, .5);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    .owl-carousel .owl-dots {
        margin: 0 auto;
        text-align: center
    }

    .owl-carousel button.owl-dot {
        margin: 10px 10px 0;
        border-radius: 50%;
        width: 10px;
        height: 10px;
        text-align: center;
        display: inline-block;
        border: none
    }

    .owl-carousel-icons5 .owl-nav .owl-prev {
        position: absolute;
        top: 42%;
        left: auto;
        right: -24px;
        margin-top: -1.65em
    }

    .owl-carousel-icons5 .owl-nav .owl-next {
        position: absolute;
        top: 58%;
        left: auto;
        right: -24px;
        margin-top: -1.65em
    }

    .owl-carousel-icons4.owl-carousel .owl-item img {
        margin: 0 auto
    }

    #carousel-controls.owl-carousel .owl-item img {
        width: 100%
    }

    #exzoom {
        width: 100%
    }

    :focus {
        outline: 0 !important
    }

    .owl-carousel {
        position: relative
    }

    .owl-carousel .owl-item {
        position: relative;
        cursor: url(../images/other/cursor.png), move;
        overflow: hidden
    }

    .owl-nav {
        display: block
    }

    #small-categories .owl-nav .owl-next,
    #small-categories .owl-nav .owl-prev {
        top: 58%
    }

    .slider .owl-nav .owl-prev {
        left: 15px
    }

    .slider .owl-nav .owl-next {
        right: 15px
    }

    .owl-nav .owl-prev {
        position: absolute;
        top: 50%;
        left: -25px;
        right: -1.5em;
        margin-top: -1.65em
    }

    .owl-nav .owl-next {
        position: absolute;
        top: 50%;
        right: -25px;
        margin-top: -1.65em
    }

    @media (max-width:480px) {
        .owl-nav .owl-prev {
            left: -10px
        }

        .owl-nav .owl-next {
            right: -10px
        }

        .countdown-timer-wrapper .timer .timer-wrapper .time {
            width: 70px;
            height: 70px;
            font-size: 1.3rem !important;
            margin-bottom: -25px
        }

        .countdown-timer-wrapper {
            margin: 39px auto 15px !important
        }

        .categories-1 .banner-1 .header-text p {
            margin-bottom: .5rem;
            font-size: 14px
        }
    }

    .owl-nav button {
        display: block;
        font-size: 1.3rem !important;
        line-height: 2em;
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        text-align: center;
        background: rgba(255, 255, 255, .5) !important;
        border: 1px solid #e8ebf3 !important;
        z-index: 99;
        box-shadow: 0 4px 15px rgba(67, 67, 67, .15)
    }

    .owl-nav button:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #2098d1;
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: .5s;
        transition-duration: .5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out
    }

    .owl-carousel:hover .owl-nav button {
        background: rgba(255, 255, 255) !important;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: .5s;
        transition-duration: .5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        animation: sonarEffect 1.3s ease-out 75ms
    }

    .owl-nav>div i {
        margin: 0
    }

    .owl-theme .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        position: absolute;
        bottom: .65em;
        left: 0;
        right: 0;
        z-index: 99
    }

    .owl-theme .owl-dots .owl-dot {
        display: inline-block;
        zoom: 1
    }

    .owl-theme .owl-dots .owl-dot span {
        width: 1em;
        height: 1em;
        margin: 5px 7px;
        background: rgba(0, 0, 0, .3);
        display: block;
        -webkit-backface-visibility: visible;
        transition: opacity .2s ease;
        border-radius: 30px
    }

    .testimonial-owl-carousel img {
        margin: 0 auto;
        text-align: center
    }

    .center-block {
        float: none;
        text-align: center;
        margin-left: auto;
        margin-right: auto
    }

    .owl-carousel.owl-drag .owl-item {
        left: 0 !important;
        right: 0
    }

    .carousel .carousel-indicators {
        bottom: -1rem
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        margin: 1px 2px
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff
    }

    .carousel-indicators li.active {
        border: 5px double
    }

    .carousel .carousel-control {
        height: 40px;
        width: 40px;
        background: 0 0;
        margin: auto 0;
        border-radius: 50%;
        background: rgba(0, 0, 0, .6);
        z-index: 999
    }

    .carousel .carousel-control i {
        font-size: 32px;
        position: absolute;
        top: 1.6rem;
        display: inline-block;
        margin: -18px 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(255, 255, 255, .9);
        text-shadow: none;
        font-weight: 700;
        z-index: 999
    }

    .carousel-control-next {
        right: -1.8rem
    }

    .carousel-control-prev {
        left: -1.8rem
    }

    .product-slider .carousel-control-next i {
        font-size: 2rem;
        padding: .5rem
    }

    .product-slider .carousel-control-prev i {
        font-size: 2rem;
        padding: .5rem
    }

    .test-carousel .carousel-control-next i {
        font-size: 2rem;
        color: #000;
        padding: .5rem
    }

    .test-carousel .carousel-control-prev i {
        font-size: 2rem;
        color: #000;
        padding: .5rem
    }

    .item7-card-img {
        position: relative;
        overflow: hidden;
        border-top-right-radius: 2px;
        border-top-left-radius: 2px
    }

    .item7-card-img a {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 1
    }

    .item-cards7-ic {
        display: inline-block
    }

    .item-cards7-ic.realestate-list li a i {
        width: 1rem
    }

    .item-cards7-ic.realestate-list li a {
        color: #3d4e67
    }

    .item-cards7-ic.realestate-list li {
        width: 50%
    }

    .item-cards7-ic li {
        float: left;
        width: 50%;
        margin-right: 0 !important;
        margin-bottom: .5rem
    }

    .item7-card-text span {
        position: absolute;
        bottom: 10px;
        left: 10px
    }

    .item-card-img {
        overflow: hidden
    }

    .item-card-desc img {
        opacity: .95;
        -webkit-transition: opacity 0.35s, -webkit-transform .35s;
        transition: opacity 0.35s, transform .35s;
        -webkit-transform: scale3d(1.05, 1.05, 1);
        transform: scale3d(1.05, 1.05, 1);
        width: 100%;
        height: 100%
    }

    .item-card-desc:hover img {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
    }

    .item-card-desc:hover .item-card-text::before {
        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 100%, 0);
        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 100%, 0)
    }

    .item-card-desc .item-card-text::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: '';
        background: rgba(255, 255, 255, 0.5);
        overflow: hidden;
        -webkit-transition: -webkit-transform .6s;
        transition: transform .6s;
        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -100%, 0);
        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -100%, 0)
    }

    .item-card7-imgs img {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out
    }

    .item-card7-imgs:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .item-card9-imgs {
        overflow: hidden
    }

    .item-card9-imgs img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out
    }

    .item-card2 p.leading-tight,
    .item-card9 p.leading-tight {
        display: block;
        display: -webkit-box;
        max-width: 100%;
        margin: 0 auto;
        font-size: 14px;
        line-height: 1;
        -webkit-line-clamp: 2;
        -moz-line-clamp: 2;
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        overflow: hidden
    }

    #tab-11 .item-card2-img:hover a {
        background: 0 0
    }

    #tab-12 .item-card2-img:hover a {
        background: 0 0
    }

    .item-card9-imgs:hover img {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .item-card2-img img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out
    }

    .item-card2-img:hover img {
        -webkit-transform: scale(1);
        transform: scale(1)
    }



    .product-slider #carousel {
        margin: 0
    }

    .product-slider #thumbcarousel {
        margin: 10px 0 0;
        padding: 0
    }

    .product-slider #thumbcarousel .carousel-item {
        text-align: center
    }
    

    .product-slider #thumbcarousel .carousel-item .thumb {
        width: 100% ;       
        margin: 0 2px;
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
    }

    .product-slider #thumbcarousel .carousel-item .thumb:hover {
        border-color: #e8ebf3
    }

    .product-slider .carousel-item img {
        width: 100% ;
        height: auto;
    }

    carousel-control-next {
        right: -1.8rem
    }

    .carousel-control-prev {
        left: -1.8rem
    }

    .product-slider .carousel-control-next i {
        font-size: 2rem;
        padding: .5rem
    }

    .product-slider .carousel-control-prev i {
        font-size: 2rem;
        padding: .5rem
    }

    .test-carousel .carousel-control-next i {
        font-size: 2rem;
        color: #000;
        padding: .5rem
    }

    .test-carousel .carousel-control-prev i {
        font-size: 2rem;
        color: #000;
        padding: .5rem
    }

    .carousel-control:active,
    .carousel-control:focus,
    .carousel-control:hover {
        color: #333
    }

    .carousel-caption,
    .carousel-control .fa {
        font: normal normal normal 30px/26px FontAwesome
    }

    #thumbcarousel .carousel-control-prev {
        left: 0;
        width: 20px;
        background: rgba(0, 0, 0, .5)
    }

    #thumbcarousel .carousel-control-next {
        right: 0;
        width: 20px;

        background: rgba(0, 0, 0, .5)
    }


    #header .navbar {
        margin: 0px;
        border-bottom: 1px solid #e8ebf3;
        background: #fff;
        padding: 6px 0px;
        z-index: 999999999999999999999999999;
    }

    figure {
        text-align: center;
    }

    .footer {
        margin-top: 33px;
        background-image: url(../img/footer-bg.png);
        background-color: #1B1A2F;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 75px 0px;
    }

    .featureDiv .tabContent .featuresBox ul,
    .properties-details-page .featuresBox ul {
        padding: 6px 25px;
        background: #f7f7f7;
        margin-bottom: -5px;
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 1;
        border-top: 1px solid #1b1a2f !important;
        ee: ;
    }

    .simple-sidebar .list-unstyled li a span {
        float: right;
        font-size: 13px !important;
        color: inherit;
    }

    .footer p {
        color: #fbfdff;
        text-align: justify !important;
        line-height: 22px !important;
    }

    .mfp-wrap {
        overflow: hidden;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        background: #000;
        border-radius: 4px;
        padding: 20px;
        margin: 0 auto;
    }

    .mfp-close {
        padding: 8px 15px;
        border-radius: 25px;
        border: none;
        float: right;
    }

    .mfp-wrap .mfp-figure {
        height: 100vh;
    }

    .mfp-wrap .mfp-figure img {
        height: 100%;
    }

    .mfp-wrap img {
        width: 100%;
    }


    .dayText {
        top: 32px !important;
    }

    iframe {
        height: 430px !important;
    }


    .simple-sidebar {
        display: inline-block;
        background: #fff;
        padding: 0px !important;
        border-radius: .4rem;
        border: 5px solid #e3e8ef;
        margin-right: 3px;
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

    .list-author {
        float: right;
        margin-top: -73px;
    }

    iframe,
    iframe video {
        width: 100% !important;
    }

    ul.slides {
        height: 100px;
        min-height: 100px;
        max-height: 100px;
    }

    .flex-direction-nav .flex-prev:before {
        font-family: "fontAwesome" !important;
        display: inline-block !important;
        content: "\f053" !important;
    }

    p {
        font-size: 14px;
        line-height: auto !important;
    }

    .flex-next:before {
        font-family: "fontAwesome" !important;
        display: inline-block !important;
        content: "\f054" !important;
    }

    .flex-viewport {
        height: 430px;
    }

    .flexslider {
        margin-bottom: 0px !important;
    }

    p {
        line-height: auto !important;
    }

    #carousel .flex-active-slide img {
        max-height: 86px !important;
    }

    .popup-link {
        width: 100%;
        max-width: 50%;
    }

    .slider {
        margin: -24px 0 10px !important;
    }

</style>
@section('content')
    <div class="propertyBanner">
        <div class="container">

            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Properties Detail</h1>
                    <!--<ul class="breadcrumbs">-->
                    <!--    <li><a href="">Home</a></li>-->
                    <!--    <li class="active">Properties Detail</li>-->
                    <!--</ul>-->
                </div>

            </div>
        </div>
    </div>
    <div class="properties-details-page content-area" style="
        margin-bottom: -98px;
    ">
        <div class="container">
            <div class="row" style="
        margin-top: -65px;
    ">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="heading-properties-3">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <b>
                                        <h1> {{ ucfirst($seller->name) }}</h1>
                                    </b>
                                </div>
                                <div class="pull-right">
                                     @php
                                        $converter = new App\Convertmodel();
                                        $price = $converter->numberTowords($seller->price)    
                                    @endphp
                                    <h1><span>PKR:&nbsp</span>{{($price) }}</h1>

                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">

                                    <p><b>{{ ucfirst($seller->address) }}</b>: &nbsp;<i
                                            class="fa fa-map-marker"></i>&nbsp;<b
                                            style="color: #8a6d3b;">{{ ucfirst($seller->city) }}</b> </p>
                                    <!--<p><i class="fa fa-map-marker"></i>-->
                                    <!--<b>{{ ucfirst($seller->city) }}</b> </p>-->
                                </div>
                                <div class="pull-right">
                                    <p><span><b>{{ ucfirst($seller->size) }}&nbsp;&nbsp;{{ ucfirst($seller->area) }}</b></span>
                                    </p>
                                </div>
                            </div>
                        </div>


                        {{-- new code --}}
                        <section class="sptb">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                        <!--Classified Description-->
                                        <div class="card overflow-hidden min-height-assigned">
                                            <div class="card-body">
                                                {{-- <div class="item-det mb-4">
                                                <ul class="d-flex">
                                                    <li class="mr-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> Lahore</a></li>
                                                    <li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> 11 months ago</a></li>
                                                    <li class="mr-5"><a href="#" class="icons"><i class="icon icon-eye text-muted mr-1"></i> 616</a></li>
                
                                                </ul>
                                            </div> --}}
                                                <div class="product-slider"
                                                    style="width: auto;height :auto  !important;">
                                                    <div id="carousel" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner" id="lightgallery">
                                                            <div data-sub-html="<p> {{ ucfirst($seller->name) }}</p>"
                                                                data-src="{{asset($seller->image)}}"
                                                                class="carousel-item  active "><img
                                                                    src="{{asset($seller->image)}}"
                                                                    alt="img" style="height:500px;"> </div>
                                                                    @php
                                                                    $imges=App\Models\Gallery::where('seller_id',$seller->seller_id)->get();
                                                                    $i=1;
                                                                    
                                                                   @endphp
                                                                      @foreach($seller->gallery as $gallery)
                                                            <div data-sub-html="<p>  {{ ucfirst($seller->name) }}</p>"
                                                                data-src="{{asset('property/gallery/'.$gallery->name)}}"
                                                                class="carousel-item "><img
                                                                    src="{{asset('property/gallery/'.$gallery->name)}}"
                                                                    alt="img" style="height:500px;"> </div>
                                                                    @endforeach
                                                                                                                    </div>
                                                        <a class="carousel-control-prev" href="#carousel" role="button"
                                                            data-slide="prev">
                                                            <i class="fa fa-angle-left " aria-hidden="true" style="font-size: 6rem;"></i>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel" role="button"
                                                            data-slide="next">
                                                            <i class="fa fa-angle-right " style="    font-size: 6rem;" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div id="thumbcarousel" class="carousel slide"
                                                            data-interval="false">
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active ">
                                                                    <div data-target="#carousel" data-slide-to="0"
                                                                        class="thumb" style=" width: 50px !important ;   " >
                                                                        <img  src="{{asset($seller->image)}}"
                                                                            alt="img" style="height:50px;    border-radius: 20%;"></div>
                                                                            @foreach($seller->gallery as $gallery)
                                                                    <div data-target="#carousel" data-slide-to="{{$i++}}"
                                                                        class="thumb"style=" width: 50px !important ;" ><img
                                                                            src="{{asset('property/gallery/'.$gallery->name)}}"
                                                                            alt="img" style="height:50px;border-radius: 20%"></div>
                                                                           @endforeach


                                                            </div>
                                                            <a class="carousel-control-prev" href="#thumbcarousel"
                                                                role="button" data-slide="prev">
                                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                            </a>
                                                            <a class="carousel-control-next" href="#thumbcarousel"
                                                                role="button" data-slide="next">
                                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        </section>


                    </div>


                    <div class="properties-description mb-40 mt-20" style="margin-top:50px;">
                        <div class="truncate">
                            <div class="toggledText" id="toggledText">
                                <h3 class="heading-2">Description</h3>
                                <p class="addReadMore showlesscontent">{{ ucfirst($seller->description) }}.</p>
                            </div>
                        </div>


                    </div>


                    <h3 class="heading-2" style="color:black;"><a href="{{ url('allproperty/' . $seller->user_id) }}"
                            style="color: #8a6d3b;">Similar Properties ≥</a></h3>
                    <!--<li><a href="{{ url('allproperty/' . $seller->user_id) }}">Name</a></li>-->
                    <div id="newRow">
                        <div class="feauter-class">
                            @php
                                $seller = App\Models\Seller::where('email', $seller->email)->get();
                            @endphp
                            @foreach ($seller as $seller)
                                {{-- @foreach (App\Models\Seller::all() as $seller) --}}
                                <div class="featuresBox">
                                    <div class="thumbnailImage">

                                        <img class="img-responsive" src="{{ asset($seller->image) }}" alt="">
                                        <!--<div class="listing-badges">-->
                                        <!--    <span style="color: aliceblue" class="featured">Featured</span>-->
                                        <!--</div>-->

                                    </div>
                                    <div class="detailBox">
                                        <h1 class="title">
                                            <a
                                                href="{{ route('seller.show', $seller->id) }}">{{ ucfirst($seller->name) }}</a>
                                        </h1>
                                        <div class="locationText">
                                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ ucfirst($seller->address) }}</a>
                                        </div>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        @if ($seller->size != '0')
                                            <li>
                                                <span
                                                    style="color:#1B1A2F">{{ ucfirst($seller->area) }}</span>{{ ucfirst($seller->size) }}
                                            </li>
                                        @endif
                                        @if ($seller->bedroom != '0')
                                            <li>
                                                <span style="color: #1B1A2F">Beds</span> {{ ucfirst($seller->bedroom) }}
                                            </li>
                                        @endif
                                        @if ($seller->Bath != '0')
                                            <li>
                                                <span style="color: #1B1A2F">Baths</span> {{ ucfirst($seller->Bath) }}
                                            </li>
                                        @endif
                                        @if ($seller->garage != '0')
                                            <li>
                                                <span style="color: #1B1A2F">Garage</span> {{ ucfirst($seller->garage) }}
                                            </li>
                                        @endif
                                        <li>
                                             @php
                                                $converter = new App\Convertmodel();
                                                $price = $converter->numberTowords($seller->price)    
                                            @endphp
                                                    
                                            <span style="color: #1B1A2F">Price</span> {{$price}}
                                        </li>
                                    </ul>

                                </div>
                            @endforeach



                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="simple-sideBar">
						
                        <h5 class="mb-3" style="height: 59px;"></h5>
                        @php
                            $pUser = DB::table('users')->find($seller->user_id);
                            
                        @endphp
                        <div class="list-author">
                            <a href="{{ url('allproperty/' . $seller->user_id) }}">
                                <img src="{{ asset($pUser->image) }}" alt="">
                            </a>
                        </div>
                        <ul class="list-unstyled list-cat">
                            @php
                                $pUser = DB::table('users')->find($seller->user_id);
                                
                            @endphp

                            @if ($pUser->name != null)
                                <li>
                                    <a href="{{ url('allproperty/' . $seller->user_id) }}">
    <!--                                    <i class="fa fa-user"-->
    <!--                                        aria-hidden="true" style="-->
    <!--    position: inherit;-->
    <!--    font-size: 14px;-->
    <!--    position: relative;-->
    <!--    top: 6px;-->
    <!--    left: 0;-->
    <!--"> -->
    </i><span style="    margin-right: 105px;font-size: 18px !important;margin-bottom: 5px;"><b>{{ ucfirst($pUser->name) }}</b></span></a></li>
                            @endif
                            @if ($pUser->email != null)
    <!--                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true" style="-->
    <!--    position: inherit;-->
    <!--    font-size: 14px;-->
    <!--    position: relative;-->
    <!--    top: 6px;-->
    <!--    left: 0;-->
    <!--"></i> Email <span>{{ ucfirst($pUser->email) }}</span> </a></li>-->
    <!--                        @endif-->
    <!--                        @if ($pUser->number != null)-->
    <!--                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true" style="position: inherit;-->
    <!--                            font-size: 20px;-->
    <!--    position: relative;-->
    <!--    top: 14px;-->
    <!--    left: 0;-->
    <!--"> </i> Contact No <span>{{ ucfirst($pUser->number) }}</span></a></li>-->
                             <a href="tel:{{ ucfirst($pUser->number) }}" type="button" class="btn btn-primary" style="    border-radius: 25px;
    font-size: 12px;
    border: 1px solid #000;
    padding: 8px;
    background: #1b1a2f;
    padding-left: 50px;
    padding-right: 50px;
    font-weight: bold;">Call</a>
                            <a href="mailto:{{ ucfirst($pUser->email) }}" type="button" class="btn btn-primary" style="    border-radius: 25px;
    font-size: 12px;
    border: 1px solid #000;
    padding: 8px;
    background: #1b1a2f;
    padding-left: 50px;
    padding-right: 50px;
    font-weight: bold;"
>Email</a>
                            @endif
                           <br>
                           <br>
                            <li><a href="{{ url('allproperty/' . $seller->user_id) }}"
                                    style="margin-left: 60px;color: #ffffff;border: solid 2px;border-color: #1b1a2f;background-color: #1b1a2f;:;padding-left: 15px;padding-right: 15px;border-radius: 20px;padding-top: 8px;padding-bottom: 8px;">See all Properties</a></li>
                                    
                        </ul>
                        <hr style="">
                        <marquee behavior="" direction="up" loop="infinite">
                            @foreach (App\Models\Ads::all() as $ads)
                                <img src="{{ asset($ads->image) }}" alt class="img-responsive"style="    width: 257px;
    margin-left: 40px;">
                            @endforeach
                        </marquee>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <script src="{{ asset('assets/new/js/vendors/jquery-3.2.1.min.js') }}"></script> --}}
    <script src="{{ asset('assets/new/plugins/lightbox/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/new/plugins/bootstrap-4.3.1-dist/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/new/plugins/lightbox/jquery.mousewheel.min.js') }}"></script>


    <script>
        function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 200;
            // Text to show when text is collapsed
            var readMoreTxt = " ... Read More";
            // Text to show when text is expanded   
            var readLessTxt = " Read Less";
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
    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
        //     var btn = document.querySelector('.carousel-item');
        // btn.onclick = function() {
        //     var navbar = document.querySelector('.navbar');

        //         navbar.style.display = "none";

        //     }

    </script>
    <script>
        setInterval(function() {
            if ($(".lg-outer").length > 0) {
                $("#header").css("display", "none");

            } else {
                $("#header").css("display", "block");
            }
        }, 100);

    </script>

@endsection
