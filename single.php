<?php
get_header();
?>	
<?php the_post(); ?>
		
      <section id="content" class="clearfix">
			<div class="wrapper">
        <div class="blog-main">
          <h1>Our<span> thoughts</span></h1>
          <div class="article-img">
            <img src="<?php bloginfo('stylesheet_directory')?>/<?php bloginfo('stylesheet_directory')?>/content/article-img.jpg" alt="" />
          </div>
          <!-- article-img -->
          
          <article class="full-article">
            <span class="author"><?php the_author(); ?> </span><span class="date"><?php the_time('F jS, Y') ?></span>
            <h2><?php the_title(); ?></h2>
           <?php the_content(); ?>
            <ul class="social-btm-links">
                <li><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcandyboxmarketing.com%2F&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width: 100px; height:21px;"></iframe></li>
                <li><script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-counter="right"></script></li>
                <li>
                  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="candyboxmktg">Tweet</a>
                  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </li>
            </ul>
            <div class="author-info">
							<div class="author-info-wrap">
								<div class="author-info-cont">
											<div class="author-info-img">
												<?php the_author_image();?>
												<p><?php the_author(); ?></p>
											</div>
											<p>
											<?php the_author_meta('user_description'); ?>
											</p>
										</div>		
								</div>
            </div>
            <!-- author-info -->
            
            <div class="article-tags">
              <span>Article subjects:</span>
              <p>Analytics, Candybox News, Conversions, Facebook Advertising, Facebook Pages, Landing Pages, 
                Paid Advertising, Pay Per Click, Search Engine Marketing</p>
            </div>
            <!-- article-tags -->
          </article>
          
            <?php comments_template(); ?>
            
            
           
        </div>
        <!-- end: blog-main -->
        <div class="blog-sidebar">
          <div class="blog-search">
            <div class="form-row">
              <label>search the blog</label>
            </div>
            <!-- form-row -->
            <div class="form-row clearfix">
              <span class="search-input">
              <input type="text" />
              </span>
              <input type="submit" value="" class="search-submit" />
            </div>
            <!-- form-row -->
          </div>
          <!-- blog-search -->
          <div class="blog-news">
            <div class="form-row">
              <label>newsletter signup</label>
            </div>
            <!-- form-row -->
            <div class="form-row">
              <span class="search-input">
              <input type="text" />
              </span>
              <input type="submit" value="" class="news-submit" />
            </div>
            <!-- form-row -->
          </div>
          <!-- blog-news -->
          
          <div class="recent-articles">
            <h3>Recent articles</h3>
             
             <?php query_posts('posts_per_page=6'); ?>

				  <?php while (have_posts()) : the_post(); ?>
					<div class="recent-post">
					
						<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>" </a>
						<h6>by <?php the_author() ?></h6>
					
					</div>

				  <?php endwhile;?>
             
          </div>
          <!-- recent-articles -->
        </div>
        <!-- end: blog-sidebar -->
			</div>	
      </section>
      <!--END content-->
  </div>
  <!--END page-->
 
<?php 
get_footer();
?>