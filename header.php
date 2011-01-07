<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo wp_title()?> | Candybox Marketing</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery.sudoslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery.easing.1.3.js.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/styled-check.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/slider/jquery.innerfade.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/js/styled-check.js"></script>

 <script>
  $(document).ready(function(){
    $("#homeForm").validate();
  });
  </script>
<script type="text/javascript">
$(document).ready(function(){
		$(".tweet").tweet({
            username: "candyboxmktg",
            join_text: "auto",
            avatar_size: 32,
            count: 1,
            auto_join_text_default: "",
            auto_join_text_ed: "",
            auto_join_text_ing: "",
            auto_join_text_reply: "",
            auto_join_text_url: "",
            loading_text: "loading tweets..."
        });
        
       // $("#homeWorkSlider").sudoSlider({ 
      //    prevNext: false,
       //   auto:true,
      //    fade: true,
      //    
       //   pause:'3000',
       //   speed: '1200'
      //  });
      $('#homeWorkSlider ul').innerfade({
						speed: 'slow',
						timeout: 5000,
						containerheight: '208px'
					});
        
});
</script>
<script type="text/javascript">
$(function(){
    $.ajax({
        url: 'http://api.twitter.com/1/users/show.json',
        data: {screen_name: 'candyboxmktg'},
        dataType: 'jsonp',
        success: function(data) {
            $('#followers a .foloverCount').html(data.followers_count);
        }
    });
});
</script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php
wp_head();
?>
</head>

<body>
<?php if(is_home()) {?>
	<div id="page" class="index-page">
	      <header id="header" class="index-header">
				<div class="wrapper clearfix">
	        <h1 class="logo">
	          <a href="<?php bloginfo('url')?>/" title="Home">candybox marketing</a>
	        </h1>
	        <nav>
	          <ul id="navigation" class="clearfix">
	            <li class="current">
	              <a href="<?php bloginfo('url')?>/" class="nav-home nav-home-active"></a>
	            </li>
	            <li class="toFlyOut">
	              <a href="<?php bloginfo('url')?>/inbound-marketing" title="A Strategy focused on getting your prospective customers to find you, instead of you trying to find them to interrupt their day with noisy ads." class="nav-inbound"></a>
	            </li>
	            <li>
	              <a href="<?php bloginfo('url')?>/our-team" title="ABOUT" class="nav-team"></a>
	            </li>
	            <li>
	              <a href="<?php bloginfo('url')?>/blog" title="BLOG" class="nav-blog"></a>
	            </li>
	          </ul>
	        </nav>
	        <div class="socialTop">
	          <a href="www.facebook.com/candyboxmarketing" class="faceBookTop" title="Become our Facebook fan"></a>
	          <a href="http://twitter.com/candyboxmktg" target="_blank" class="twitterTop" title="Follow us on Twitter"></a>
	          <a href="<?php bloginfo('url')?>/contact" class="mailTop" title="Mail Us"></a>
	        </div>
	        <!--END socialTop-->
	        <h2 class="head-txt1">
	          <span>ATTRACT CONVERT ENGAGE</span>
	        </h2>
	        <!--END head-txt1-->
	        <h2 class="head-txt2">
	          <span>your prospect</span>
	        </h2>
	        <!--END head-txt2-->
	        <div class="man-blk"><img src="<?php bloginfo('stylesheet_directory')?>/img/elem/man.png" alt="" /></div>
	        <!--END man-blk-->
	        <div class="head-box">
	          <a href="<?php bloginfo('url')?>/contact"><img src="<?php bloginfo('stylesheet_directory')?>/img/elem/head-box.png" alt="" /></a>
	        </div>
	        <!--END head-box-->
				</div>	
	      </header>
<?php } else { ?>
	<div id="page">
      <header id="header">
			<div class="wrapper">
        <h1 class="logo">
          <a href="<?php bloginfo('url')?>/" title="Home">candybox marketing</a>
        </h1>
        <nav>
          <ul id="navigation" class="clearfix">
            <li>
              <a href="<?php bloginfo('url')?>/" class="nav-home"></a>
            </li>
            <li class="page-item <?php if (is_page('inbound marketing')) { echo "current";}?>">
              <a href="<?php bloginfo('url')?>/inbound-marketing" title="" class="nav-inbound <?php if (is_page('inbound marketing')) { echo "nav-inbound-active";}?>" ></a>
            </li>
            <li class="page-item <?php if (is_page('our team')) { echo "current";}?>">
              <a href="<?php bloginfo('url')?>/our-team" title="" class="nav-team <?php if (is_page('our team')) { echo "nav-team-active";}?>"> </a>
            </li>
            <li class="page-item <?php if (is_page('blog')) { echo "current";}?>">
              <a href="<?php bloginfo('url')?>/blog" title="" class="nav-blog <?php if (is_page('blog')) { echo "nav-blog-active";}?>"></a>
            </li>
          </ul>
        </nav>
        <div class="socialTop">
          <a href="http://www.facebook.com/candyboxmarketing" class="faceBookTop" title="Become our Facebook fan"></a>
          <a href="http://twitter.com/candyboxmktg" target="_blank" class="twitterTop" title="Follow us on Twitter"></a>
          <a href="<?php bloginfo('url')?>/contact" class="mailTop" title="Mail Us"></a>
        </div>
        <!--END socialTop-->
			</div>	
      </header>
<?php } ?>
 
      