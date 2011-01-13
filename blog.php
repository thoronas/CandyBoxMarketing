<?php
/*
Template Name: blog
*/
?>

<?php
get_header();
?>
      <!--content-->
      <section id="content" class="clearfix">
			<div class="wrapper">
        <div id="cont-main-inn">
          <div class="wrap-top">
            <div class="form-row">
             <!--
 <?php get_search_form(); ?>
             
--> 
            </div>
            <!-- form-row -->
            <h1>Our <span>thoughts</span></h1>
          </div>
          
          <!--wrap-col-->
          <div class="wrap-col blog clearfix">
           
			<?php
			// class for first post
				$firstPost = 'first-col';
			query_posts('posts_per_page=3');
			if(have_posts()):while(have_posts()):the_post();
				
				require('loop.php');
			endwhile;
			else:
				?>
				<h2>No articles have been posted yet!</h2>
				<?php
			endif;
			wp_reset_query();
			?>
            
          </div>
          <!--end: wrap-col-->
          
          <!--article-wrap-->
          <div class="article-wrap">
            
            <!--articles-->
            <div class="articles">
              <h4>PREVIOUS ARTICLES</h4>
              <ul class="first-list">
                <?php query_posts('offset=3&posts_per_page=3'); ?>

				  <?php while (have_posts()) : the_post(); ?>
					<li>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>"</a>
					<span>by <?php the_author() ?></span>
					</li>

				  <?php endwhile;?>

              </ul>
              <ul>
                <?php query_posts('offset=6&posts_per_page=3'); ?>

				  <?php while (have_posts()) : the_post(); ?>
					<li>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>"
					<span>by <?php the_author() ?></span>
					</li>

				  <?php endwhile;?>
              </ul>
              <ul>
               <?php query_posts('offset=9&posts_per_page=3'); ?>

				  <?php while (have_posts()) : the_post(); ?>
					<li>
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>"
					<span>by <?php the_author() ?></span>
					</li>

				  <?php endwhile;?>
              </ul>
            </div>
            <!--end: articles-->
            
          </div>
          <!--article-wrap-->
          
          <!--subject-->
          <div class="subject">
            <h4>ARTICLE SUBJECTS</h4>
            <div>
            <ul>
	            <?php wp_list_categories('show_count=true&title_li='); ?>
            </ul>
            </div>       
          </div>
          <!--end: subject-->
          
        </div>
        <!--end: content-->
      </div>  
      </section>
      <!--END content-->

  </div>
  <!--END page-->
  
 
<?php 
get_footer();
?>