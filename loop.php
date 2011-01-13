 
			<div class="w275 <?php echo $firstPost; ?>">
  			

              <span><em><?php the_author() ?></em> <?php the_time('F jS, Y') ?></span>
              
              <h3>
			  <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
			  </h3>
              <!--small-img-->
      <?php if( has_post_thumbnail()){?>
              <div class="small-img">
				<?php the_post_thumbnail();?>
              </div>
               <!--end: small-img-->
              <p><?php the_excerpt(); ?></p>
            </div>
            <!--w275: end-->
          <?php 
	  			// class for first post removed for all other posts by leaving variable blank
	  			$firstPost = ''; 
		 } else {?>
              <!--end: small-img-->
              <p><?php the_excerpt(); ?></p>
            </div>
            <!--w275: end-->
          <?php 
	  			// class for first post removed for all other posts by leaving variable blank
	  			$firstPost = '';} 
  			?>
          