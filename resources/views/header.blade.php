<!-- Page Preloder -->
{{--<div id="preloder">--}}
{{--  <div class="loader"></div>--}}
{{--</div>--}}
<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
        <a href="tel:+84 6868 3456 899"><span class="lnr lnr-phone-handset"></span> <span class="text">+84 3456
            899</span></a>
        <a href="mailto:support@5superhero.edu.vn"><span class="lnr lnr-envelope"></span> <span
            class="text">support@fivesuperhero.edu.vn</span></a>
      </div>
    </div>
  </div>
</div>
<div class="container main-menu">
  <div class="row align-items-center justify-content-between d-flex">
    <div id="logo">
      <a href="/"><img class="imgage-logo" src="/img/image/logoepro2.png" alt="" title="" /></a>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/faculty">Faculty</a></li>
        <li><a href="/courses">Courses</a></li>
        <li><a href="/events">Events</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/blog-home">Blog</a></li>
        <li class="menu-has-children"><a href="#">Pages</a>
          <ul>
            <!-- <li><a href="/elements.html">Elements</a></li> -->
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </li>
        <li><a href="/admissions">Admissions</a></li>
      </ul>
      <ul class="nav-menu tablet-mobile">
        <li><a href="/login"><i class="fa fa-user"></i>Login</a></li>
      </ul>
    </nav>
    <nav id="nav-menu-container">

      <ul class="nav-menu laptop">
        <li><a href="/login"><i class="fa fa-user"></i>
          Login</a></li>
      </ul>
    </nav>
  </div>
</div>

<script>
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');

    $('.menu-has-children').each(function (e){
      $(this).find('i').nextAll('ul').eq(0).slideToggle();
      $(this).find('i').toggleClass("lnr-chevron-up lnr-chevron-down");
    })
    $(document).on('click', '.menu-has-children i', function (e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function (e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
      $('#mobile-body-overly').toggle();
    });

    $(document).on('click', function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }
</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bass.css">
	<link rel="stylesheet" href="css/response.css">
	<link rel="stylesheet" href="css/public.css">
