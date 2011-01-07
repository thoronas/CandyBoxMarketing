<div class="company-box">
              <div class="company-img">
					<?php the_post_thumbnail(array(186, 186));?>
              </div>
              <div class="company-cont">
                <h3><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
            
             
			