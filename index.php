<?php
get_header();
?>
			
      <section id="content" class="clearfix">
			<div class="wrapper clearfix">
       <div id="main-content-inner" class="clearfix">
        <div class="main-content-inside">
          <h1>Your website should convert <span>visitors</span> into <span>customers</span></h1>
          <div class="contNav clearfix">
            <div class="contNavItem">
              <div class="contNavBox cnBox-1">
                <div class="contNavBoxHead">
                  <h5>FACEBOOK FOR BUSINESS?</h5>
                  <a href="<?php bloginfo('url')?>/inbound-marketing">You bet! Find out how you generate qualified leads</a>
                </div>
                <!--END contNavBoxHead-->
              </div>
              <!--END contNavBox-->
            </div>
            <!--END contNavItem-->
            
            <div class="contNavItem">
              <div class="contNavBox cnBox-2">
                <div class="contNavBoxHead">
                  <h5>THINK YOUR SITE IS UGLY?</h5>
                  <a href="<?php bloginfo('url')?>/web-design">We do too, and so do your customers. (let us help)</a>
                </div>
                <!--END contNavBoxHead-->
              </div>
              <!--END contNavBox-->
            </div>
            <!--END contNavItem-->
            
            <div class="contNavItem">
              <div class="contNavBox cnBox-3">
                <div class="contNavBoxHead">
                  <h5>HOW TO GET ON GOOGLE?</h5>
                  <a href="<?php bloginfo('url')?>/inbound-marketing">We're <span>Google Certified</span>; customers will find you!</a>
                </div>
                <!--END contNavBoxHead-->
              </div>
              <!--END contNavBox-->
            </div>
            <!--END contNavItem-->
            
            <div class="contNavItem">
              <div id="form" class="contNavBox cnBox-4">
                <div class="contNavBoxHead">
                  <h5>DON'T KNOW HOW TO BEGIN?</h5>
                  <a href="#">Give us 10 minutes, we'll help you find your way</a>
                </div>
                <!--END contNavBoxHead-->
                <div class="nav-cont-popup">
                  <div class="nav-cont-popup-top"></div>
                  <div class="nav-cont-popup-mid">
                    <a href="#" class="popup-close"></a>
                    
					<?php gravity_form(1, true, false, false, null, true); ?>
					
                  </div>
                  <div class="nav-cont-popup-bot"></div>
                </div>
              </div>
              <!--END contNavBox-->
            </div>
            <!--END contNavItem-->
          </div>
          <!--END contNav-->
          
          <div class="content-mid clearfix">
          <!-- clients block : begin-->
            <div class="bubble">
              <h2>CLIENTS</h2>
              <div class="bubble-links clearfix">
                <ul class="bubble-links-left">
                  <li>
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-1.png" alt="" />
                  </li>
                  <li>
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-2.png" alt="" />
                  </li>
                  <li>
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-3.png" alt="" />
                  </li>
                </ul>
                <ul class="bubble-links-right">
                  <li>
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-4.png" alt="" />
                  </li>
                  <li>
                   <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-5.png" alt="" />
                  </li>
                  <li>
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bubble-link-6.png" alt="" />
                  </li>
                </ul>
              </div>
            </div>
            <!-- clients block : end-->
            <div class="content-right">
              <!-- home slider : begin -->
              <div id="homeWorkSlider" class="slider clearfix">
                <ul>
                  <li>
                    <div class="slid-img">
                      <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/slid-img-1.png" alt="" />
                    </div>
                    <div class="slid-cont">
                      <h6>We reduced an ad budget by <span>1000</span>%</h6>
                      <p>Effective use of funds actually increased results by <span>10x</span>!</p>
                    </div>
                  </li>
                  <li>
                    <div class="slid-img">
                      <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/slid-img-2.png" alt="" />
                    </div>
                    <div class="slid-cont">
                      <h6>We redesigned a <span>FORTUNE 1000</span> website.</h6>
                      <p>With just a few, simple pages we found more leads.</p>
                    </div>
                  </li>
                  <li>
                    <div class="slid-img">
                      <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/slid-img-3.png" alt="" />
                    </div>
                    <div class="slid-cont">
                      <h6>In two months, we created <span>10,000 FANS.</span></h6>
                      <p>Facebook leads to funding for charitable organizations.</p>
                     
                    </div>
                  </li>
                </ul>
            
                <a href="<?php bloginfo('url')?>/our-work" class="slide-cont-btn">Find out how</a>
              </div>
              <!-- home slider : end -->
              <div class="newsletter clearfix">
                <h5>Our amazing newsletter</h5>
					<?php gravity_form(2, false, false); ?>

                <div class="news-article">
                  <div class="bird">
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/cont/bird.png" alt="" />
                  </div>
                  <div class="news-art-cont">
                    <div class="tweet"></div>
                    <div id="followers">
                      <a href="http://twitter.com/candyboxmktg" target="_blank" class="join-twit"><span class="foloverCount"></span>&nbsp;Twitter Followers. Join them<span><img src="<?php bloginfo('stylesheet_directory')?>/img/bg/bg-arrow-orange.png" alt="" /></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-bot clearfix">
            <h2>RECENT NEWS</h2>
            <?php
			query_posts('posts_per_page=3');
			if(have_posts()):while(have_posts()):the_post();
				
				require('loop-index.php');
			endwhile;
			else:
				?>
				<h2>No articles have been posted yet!</h2>
				<?php
			endif;
			wp_reset_query();
			?>
          </div>
          <footer class="bootBlk">
            <ul>
              <li><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcandyboxmarketing.com%2F&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width: 100px; height:21px;"></iframe></li>
              <li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="right"></script></li>
              <li>
                <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="candyboxmktg">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
              </li>
            </ul>
          </footer>
        </div>
        <!--END main-content-inside-->
        </div>
			</div>	
      </section>
      <!--END main-content-inner-->

</div>
<!--END page-->
<?php
function form_resize(){
?>
<script>

$(document).ready(function($){

	$('#gform_1').live('submit',function(e){
		//e.preventDefault();
		var height; 
		
		$('#form .nav-cont-popup-mid').css('height', '600px');
		$('.cnBox-4').css('height', '710px');
	});
});
</script>
<?php
}
add_action('wp_footer','form_resize');
?>
<?php
get_footer();
?>