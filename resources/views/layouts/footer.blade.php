<div class="footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <a>
                  <img class="footer-logo" src="{{asset('assets/img/fff.png')}}" alt="">
              </a>
             <p>ShinnyView is the leading Property Market place in Pakistan. We are confident 
                 that we will save your time and money through trusted agents and buyers throughout
                  Pakistan. ShinnyView is an ultimate Buying and Selling place for all type of properties,
                   residential, commercial, leasing or renting, along with individual buyers, sellers.</p>
          </div>
          <div class="col-lg-2">
              <h4>Useful Links</h4>
              <ul class="utf-footer-links-item">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{route('about')}}"> About Us</a></li>
                  <li><a href="{{url('privacy')}}">  Privacy Policy</a></li>
                  <li><a href="{{route('term')}}">Terms Conditions </a></li>
                  <li><a href="{{url('contact')}}"> Contact</a></li>
                  <li><a href="{{route('faq')}}"> FAQ </a></li>
              </ul>
          </div>
           <div class="col-lg-3">
              <h4>CONTACT US</h4>
              <ul class="">
                  <li><a href="https://goo.gl/maps/AQodFg21n6ujFGu39"><i ><span style="color: #bc985f;" class="fa fa-map-marker" aria-hidden="true"></span></i> Office No: 7-A, 2nf Floor, &nbsp;Islam Plaza, G-9 Markaz, Islamabad</a></li>
                  <li><a href="#"><i> <span style="color: #bc985f;" class="fa fa-envelope" aria-hidden="true"></span></i> info@shinnyview.com</a></li>
                  <li><a href="#"><i> <span style="color: #bc985f;" class="fa fa-phone" aria-hidden="true"></span></i>  0330-6969698</a></li>
                  <li><a href="#"><i> <span style="color: #bc985f;"  class="fa fa-server" aria-hidden="true"></span></i>  www.shinnyview.com</a></li>
              </ul>
          </div> 
             <div class="col-lg-3">
              <h4>Join Us</h4>
              <a href="https://www.facebook.com/ShinnyView.PK">
                  <img class="footer-icon" src="{{asset('assets/img/facebook.png')}}" alt="">
              </a>

              <a href="https://twitter.com/shinnyview">
                  <img class="footer-icon" src="{{asset('assets/img/twitter.png')}}" alt="">
              </a>

              <a href="https://www.instagram.com/shinnyview_official/">
                <img class="footer-icon" src="{{asset('assets/img/Instagram.png')}}" alt="">
              </a>

              <a href="https://www.linkedin.com/in/shinny-view-980a89206/">
                  <img class="footer-icon" src="{{asset('assets/img/in.png')}}" alt="">
              </a>
              <a href="https://www.youtube.com/channel/UC5D93IRh-GQ0m9KzH8sJAnQ">
                  <img class="footer-new" src="{{asset('assets/img/youtube.png')}}" alt="">
              </a>
          </div>
          <div class="col-lg-3">
              <img class="bar-new" style="width:128px;" st src="{{asset('assets/img/gooleplay.png')}}" alt="">
                  <img class="bar-new" style="width:128px;" src="{{asset('assets/img/applestore.png')}}" alt="">

              </div>
              <div class="col-lg-3">
                <img class="bar-new" src="{{asset('assets/img/bar.jpeg')}}" alt="">
                </div
      </div>
      
  </div>
 

{{-- <script src="{{ asset('assets/js/slick.js') }}"></script> --}}

  <script type="text/javascript">
  $(function(){
    SyntaxHighlighter.all();
  });
  $(window).load(function(){
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 120,
      itemMargin: 5,
      asNavFor: '#slider'
    });

    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FNVQ73CMSF"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-FNVQ73CMSF');
</script>
<script type="text/javascript" src="{{asset('assets/carousel/shCore.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/carousel/shBrushXml.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/carousel/shBrushJScript.js')}}"></script>

<!-- Optional FlexSlider Additions -->
<script src="{{asset('assets/carousel/jquery.easing.js')}}"></script>
<script src="{{asset('assets/carousel/jquery.mousewheel.js')}}"></script>
<script defer src="{{asset('assets/carousel/demo.js')}}"></script>

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
        $('.feauter-class').slick({
            infinite: true,
            slidesToShow: 2,
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
  <footer class="footersss">
      <span style="color: white;margin-left:515px;">
         © 2021 Shinny View Limited. All rights reserved.</span>
      </footer>
</div>

