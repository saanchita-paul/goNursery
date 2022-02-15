<?php include_once("common/config.php");?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $sSiteTitle; ?></title>
<meta name="description" content="<?php echo $sSiteTitle; ?>">
<meta name="keywords" content="<?php echo $sSiteTitle; ?>">
<meta http-equiv="refresh" content="600">
<meta name="author" content="<?php echo $sAuthor; ?>">
<meta name="Developer" content="<?php echo $sDeveloper; ?>">
<meta name="resource-type" content="document">
<meta name="contact" content="<?php echo $sEmail; ?>">
<meta name="copyright" content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="googlebot-news" content="index, follow">
<meta name="msnbot" content="index, follow">
<meta property="fb:app_id" content="<?php echo $sAppId; ?>">
<meta property="og:site_name" content="<?php echo $sSiteName; ?>">
<meta property="og:title" content="<?php echo $sSiteTitle; ?>">
<meta property="og:description" content="<?php echo $sSiteTitle; ?>">
<meta property="og:url" content="<?php echo $sSiteURL; ?>">
<meta property="og:type" content="article">
<meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
<meta property="og:locale" content="en_US">
<link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
<link rel="canonical" href="<?php echo $sSiteURL; ?>">
<link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
<link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
<?php echo $sCSSBootStrap;
echo $sCSSFontAwesome;
echo $sCSSEMM;
echo $sCSSOwl;
echo $sCSSKiron;
echo $sCSSOwlMin; ?>
</head>
<body>
<?php echo $sFbRoot; ?>
<?php include_once("common/header.php"); ?>
<main>
    <div class="container">
        <div class="row">
            <h1>Hello</h1>
        </div>
       
    </div>
    
</main>

<?php include_once("common/footer.php"); ?>
<script type="text/javascript" src="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<?php echo $sBackUpTop; ?>
<?php echo $sJSjQuery; ?>
<?php echo $sJSBootStrap; ?>
<?php echo $sPopper; ?>
<?php echo $sJSEMM; ?>
<?php echo $sJSOwl; ?>

<script type="text/javascript">
    $('.navToggle').click(function(){
  $('.menu').toggleClass('menuOn');
  $('nav').toggleClass('navOn');
  $('body, .most_last_news_details, .most_read_details').toggleClass('no-scrollbar');
  $('.nav-link').toggleClass('hide');
})
</script>

<script type="text/javascript">
     // Sticky Header
 window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    var header2 = document.getElementById("myHeader2");
    var sticky2 = header.offsetTop;


    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        if (window.pageYOffset > sticky2) {
            header2.classList.add("sticky2");
        } else {
            header2.classList.remove("sticky2");
        }
    }

</script>

<script type="text/javascript">
    (function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar();
        });
    })(jQuery);
</script>

<script type="text/javascript">
    jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  dots: false,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 8000,
  smartSpeed: 900,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 3
    },

    1366: {
      items: 3
    }
  }
});
</script>

</body>




</html>