<?php 

add_theme_support( 'post-thumbnails' );

function cbm_comment($comment, $args, $depth) {
	$GLOBALS['comment']= $comment; ?>
	<div class="blog-comments clearfix">
              <div class="com-col1">
                <ul>
                  <li class="comment-author vcard">
                    <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link())?>
                  </li>
                  <li><?php printf(__('%1$s'), get_comment_date())?></li>
                  <li><?php printf(__('%1$s'), get_comment_time())?></li>
                </ul>
              </div>
              <!-- com-col1 -->
              <div class="com-col2">
                <?php comment_text() ?>
              </div>
              <!-- com-col2 -->
            </div>
        <?php
}


function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>