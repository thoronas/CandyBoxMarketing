			<form action="<?php bloginfo('home'); ?>/" method="get" id="searchform">
			
			<span class="search-input">
              <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
              </span>
              <input type="submit" value="" class="search-submit" />
              
              </form>
              
             