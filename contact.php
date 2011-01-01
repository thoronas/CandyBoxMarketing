<?php
/*
Template Name: contact
*/
?>

<?php
get_header();
?>
			
      <section id="content" class="clearfix">
      <div class="contact-map">
			<div class="wrapper">
        <div class="cont-col1">
          <h1>Our<span> contact</span></h1>
          <div class="contact-desc1">
            <p>Candybox Marketing has talent from across the US &#38; Canada to help you with your project. 
              We bring you the highest quality work without the costly overhead.</p>
          </div>
          <!-- end: contact-desc1 -->
          
          <div class="contact-desc2">
            <h5>Drop us a line:</h5>
            <p><em class="align-right">tollfree </em> <span>(866) 723-1388</span></p>
            <p><em class="align-right">fax </em> <span>(905) 297-5474</span></p>
          </div>
          <!-- end: contact-desc2 -->
          <div class="clearing"></div>
          <!-- end: clearing -->
          <p class="send-msg"><span>Or send us a message</span> - we'll be back to you in 24 hours.</p>
          <form action="" class="cmxform contactForm" id="commentForm">
            <fieldset>
              <div class="name-col">
                <label for="cname">Name</label>
                <input  id="cname" name="name" type="text" value="" class="required cont-input" />
              </div>
              <!-- end: name-col-->
              <div class="phone-col">
                <label for="cphone">Phone</label>
                <input id="cphone" name="phone" type="text" value="" class="required cont-input" />
              </div>
              <!-- end: phone-col -->
              <div class="email-col">
                <label for="cemail">Email</label>
                <input id="cemail" name="email" type="text" value="" class="required email mail-input" />
              </div>
              <!-- end: email-col -->
              <div class="clearing"></div>
              <!-- end: clearing -->
              <div class="c-textarea">
                <label for="ccomment">Message</label>
                <textarea id="ccomment" name="comment" class="required" cols=20 rows=5></textarea>
                <input type="submit" class="send-btn submit" value=""/>
              </div>
              <!-- end: c-textarea -->
            </fieldset>
          </form>
        </div>
        <!-- end: cont-col1 -->
        
        <div class="cont-col2">
          <div class="cont-map">
            
          </div>
          <!--end: cont-map -->
          <div class="cont-sidebar">
            <div class="cont-address">
              <h5>Mailing Address:</h5>
              <p>251 Queen St. South, Suite 102</p>
              <p>Mississauga, ON</p>
              <p>L5M 1L7</p>
            </div>
            <!-- end: cont-address -->
            <div class="cont-social">
              <a href="http://facebook.com/candyboxmarketing" target="_blank" class="cont-fb" title="Become our Facebook fan"></a>
              <a href="http://twitter.com/candyboxmktg" target="_blank" class="cont-tw" title="Follow us on Twitter"></a>
            </div>
            <!-- end: cont-social -->
            <div class="cont-mails">
              <a href="mailto:sales@candyboxmarketing.com">sales@candyboxmarketing.com</a>
              <a href="mailto:accounts@candyboxmarketing.com">accounts@candyboxmarketing.com</a>
              <a href="mailto:support@candyboxmarketing.com">support@candyboxmarketing.com</a>
            </div>
            <!-- end: cont-mails -->
            
          </div>
          <!-- end: cont-sidebar -->
        </div>
        <!-- end: cont-col2 -->
        
        <div class="clearing"></div>
        <!-- end: clearing -->

        <!-- end: social-links --><footer class="bootBlk">
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
        </div>    
      </section>
      <!--END content-->
  </div>
  <!--END page-->
 
<?php 
get_footer();
?>