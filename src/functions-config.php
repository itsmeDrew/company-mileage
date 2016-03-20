<?php // ==== CONFIGURATION (CUSTOM) ==== //

// Specify custom configuration values in this file; these will override values in `functions-config-defaults.php`
// The general idea here is to allow for themes to be customized for specific installations

///////////////////////////
/// THE EXCERPT
///////////////////////////

function custom_excerpt_length( $length ) {
	return 30;
}

function new_excerpt_more($more) {
       global $post;
	return '... <a href="' . get_permalink($post->ID) . '" class="link--read-more">Read More</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

///////////////////////////
/// POST COMMENTS
///////////////////////////

function alter_comment_form_fields($fields){
		$comment_notes_before = '';
		$fields['author'] = '<p class="comment-form-author">' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="author" name="author" type="text" placeholder="Your Name*" size="30"' . $aria_req . ' /></p>';
		$fields['email'] = '<p class="comment-form-email">' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="email" name="email" type="email" placeholder="Your Email*" size="30"' . $aria_req . ' /></p>';
		$fields['url'] = '<p class="comment-form-url">' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="url" name="url" type="url" placeholder="Have a Website?" size="30"' . $aria_req . ' /></p>';
  return $fields;
}

add_filter('comment_form_default_fields','alter_comment_form_fields');

function my_update_comment_field($comment_field) {
	$comment_field = '<p class="comment-form-comment"><textarea id="comments" name="comment" cols="45" rows="8" aria-required="true" required="required" placeholder="Your Comment Here*" value=""></textarea></p>';
	return $comment_field;
}
add_filter('comment_form_field_comment','my_update_comment_field');

///////////////////////////
/// IF PAGE PARENT
///////////////////////////

function page_parent($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
               return true;   // we're at the page or at a sub page
	else
               return false;  // we're elsewhere
};
