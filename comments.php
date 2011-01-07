<div class="comments">
	<h2>COMMENTS</h2>
	
		
			<?php wp_list_comments('type=comment&callback=cbm_comment'); 
	
	$new_defaults = array(
	
	'fields'               => apply_filters( 'comment_form_default_fields', array('author' => '<div class="blog-form-row clearfix"><div class="blog-form-name"><label>Name</label><span><input type="text" /></span></div>', 'website' => '<div class="blog-form-webs"><label>Website</label><span><input type="text" value="http://" /></span></div></div>') ),
	'comment_field'        => '<div class="blog-form-row clearfix"><div class="blog-form-comment"><label>Comment</label><span><textarea rows="5" cols="20"></textarea></span></div></div>',
	'comment_notes_before' => '<p class="comment-notes">' . __( '' ) . ( $req ? $required_text : '' ) . '</p>',
	'comment_notes_after'  => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
	'id_form'              => 'commentform',
	'id_submit'            => 'blog-form-subm',
	'title_reply'          => __( 'ADD YOUR THOUGHTS' ),
	'title_reply_to'       => __( 'Leave a Reply to %s' ),
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => __( 'COMMENT' )
);
?>
            <?php comment_form($new_defaults); ?>

	
</div>