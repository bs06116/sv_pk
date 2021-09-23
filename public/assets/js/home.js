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

    $(document).ready(function() {
        $('.accordion-plus-toggle').click(function(){

         //Remove active classes
         $('.accordion-plus-toggle').removeClass('activeTab');

         //Expand or collapse this panel
         $(this).addClass('activeTab');
      });
  });