<footer id="footer" class="clearfix">
  <div class="footerContainer">
    <div class="footLeft">
      <div class="footSocial">
        <a href="http://www.facebook.com/candyboxmarketing" class="faceBookFoot" title="Become our Facebook fan"></a>
        <a href="http://twitter.com/candyboxmktg" target="_blank" class="twitterFoot" title="Follow us on Twitter"></a>
        <a href="<?php bloginfo('url')?>/contact" class="mailFoot" title="Mail Us"></a>
      </div>
      <!--END footSocial-->
      
      <div class="footListBlk">
        <div class="footListWrap">
          <div class="FootListCont">
            <div class="listsFoot">
              <h5>marketing</h5>
              <ul>
                <li>
                  <a href="<?php bloginfo('url')?>/our-work" title="google">google</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/facebook" title="facebook">facebook</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/our-work" title="campaigning">campaigning</a>
                </li>
              </ul>
            </div>
            <!--END listsFoot-->
            
            <div class="listsFoot">
              <h5>about cbm</h5>
              <ul>
                <li>
                  <a href="<?php bloginfo('url')?>/our-team" title="our clients">our clients</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/our-work" title="our work">our work</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/our-team" title="our team">our team</a>
                </li>
              </ul>
            </div>
            <!--END listsFoot-->
            
            <div class="listsFoot">
              <h5>miscellanous</h5>
              <ul>
                <li>
                  <a href="<?php bloginfo('url')?>/facebook" title="custom fb pages">custom fb pages</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/web-design" title="web design">web design</a>
                </li>
                <li>
                  <a href="<?php bloginfo('url')?>/our-clients" title="our clients">our clients</a>
                </li>
              </ul>
            </div>
            <!--END listsFoot-->
            
            <div class="listsFoot lFBig">
              <h5>recent blog entries</h5>
              <ul>
              <?php query_posts('posts_per_page=3'); ?>

				  <?php while (have_posts()) : the_post(); ?>
					<li>
					<a href="<?php bloginfo('url')?>/blog/<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>"
					</li>

				  <?php endwhile;?>
                
              </ul>
            </div>
            <!--END listsFoot-->
            
          </div>
          <!--END FootListCont-->
        </div>
        <!--END footListWrap-->
      </div>
      <!--END footListBlk-->
    </div>
    <!--END footLeft-->
    <div class="footRight">
      <h5 class="footerLogo">
        <a href="#" title="Home">candybox marketing</a>
      </h5>
      <div class="copyrightBlk">&copy; 2010 Candybox Marketing Inc. All rights reserved.</div>
      <!--END copyrightBlk-->
      
      <div class="sityBlk">
        <div class="sityBlkL">
          <p>Toronto:</p>
          <p>Los Angeles:</p>
          <p>Toll-Free:</p>
        </div>
        <!--END sityBlkL-->
        <div class="sityBlkR">
          <p>647.203.3958</p>
          <p>818.292.0529</p>
          <p>866.723.1388</p>
        </div>
        <!--END sityBlkR-->
      </div>
      <!--END sityBlk-->
      
      <div class="footMailBlk">
        <a href="mailto:sales@candyboxmarketing.com">sales@candyboxmarketing.com</a>
      </div>
      <!--END footMailBlk-->
      
    </div>
    <!--END footRight-->
  </div>
  <!--END footerContainer-->
</footer>
<!--END footer-->
</body>
</html>