<?php
/*
Template Name: blog-article
*/
?>

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
          <div class="comments">
            <h2>COMMENTS</h2>
            <div class="blog-comments clearfix">
              <div class="com-col1">
                <ul>
                  <li>
                    <a href="#">Sheerin 501</a>
                  </li>
                  <li>October 12, 2010</li>
                  <li>12:52pm</li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <p>Assertively engage sticky e-commerce rather than standardized processes. Phosfluorescently build interactive collaboration and idea-sharing.</p>
              </div>
              <!-- com-col2 -->
            </div>
            <!-- blog-comments -->
            <div class="blog-comments clearfix">
              <div class="com-col1">
                <ul>
                  <li>
                    <a href="#">Beenay 25</a>
                  </li>
                  <li>October 12, 2010</li>
                  <li>12:54pm</li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <p>Efficiently seize user friendly expertise through impactful alignments. Proactively deliver progressive value via fully tested total linkage.</p>
              </div>
              <!-- com-col2 -->
            </div>
            <!-- blog-comments -->
            <div class="blog-comments clearfix">
              <div class="com-col1">
                <ul>
                  <li>
                    <a href="#">Athor 77</a>
                  </li>
                  <li>October 12, 2010</li>
                  <li>1:10pm</li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <p>Dramatically provide access to 24/7 models via open-source web-readiness. Conveniently brand backward-compatible materials rather than diverse data. Monotonectally monetize collaborative process improvements rather than bleeding-edge channels.</p>
              </div>
              <!-- com-col2 -->
            </div>
            <!-- blog-comments -->
            <div class="blog-comments blog-comments-inn clearfix">
              <div class="com-col1">
                <ul>
                  <li>
                    <a href="#">Darrell</a>
                  </li>
                  <li>October 12, 2010</li>
                  <li>1:33pm</li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <p>Seamlessly harness focused solutions with magnetic vortals. Credibly mesh top-line e-services.</p>
              </div>
              <!-- com-col2 -->
            </div>
            <!-- blog-comments -->
            <div class="blog-comments clearfix">
              <div class="com-col1">
                <ul>
                  <li>
                    <a href="#">Siferra 89</a>
                  </li>
                  <li>October 12, 2010</li>
                  <li>1:47pm</li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <p>Continually matrix value-added "outside the box" thinking for bleeding-edge models. Uniquely synergize one-to-one internal or "organic" sources.</p>
              </div>
              <!-- com-col2 -->
            </div>
            <!-- blog-comments -->
          </div>
          <!-- end: comments -->
          <div class="blog-form">
            <h2>ADD YOUR THOUGHTS</h2>
            <form action="">
              <fieldset>
                <div class="blog-form-row clearfix">
                  <div class="blog-form-name">
                    <label>Name</label>
                    <span>
                    <input type="text" />
                    </span>
                  </div>
                  <div class="blog-form-webs">
                    <label>Website</label>
                    <span>
                    <input type="text" value="http://" />
                    </span>
                  </div>
                </div>
                <div class="blog-form-row clearfix">
                  <div class="blog-form-comment">
                    <label>Comment</label>
                    <span>
                    <textarea rows="5" cols="20"></textarea>
                    </span>
                  </div>
                </div>
                <div class="blog-form-row clearfix">
                  <input type="submit" class="blog-form-subm" value="COMMENT" />
                </div>
              </fieldset>
            </form>
          </div>
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