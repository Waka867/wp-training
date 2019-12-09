<?php

// Does not show comment content if the page/post is password protected and user has not yet authenticated
if( post_password_required() ){
	return;
}



echo '<div id="comments-main-section" class="comments-area">
	<p>This post has ' . get_comments_number() . ' comments.</p>
	<div id="comments">';



$attr = [
	'avatar_size' => 75 
];



// If comments present, list them
if( have_comments() ){
	wp_list_comments( $attr );

	the_comments_navigation();
};



echo '</div>
	<div id="comment-submission-form">';

if( comments_open() ){
	comment_form();
} else {
	echo '<p class="comments-closed">Sorry, the comment section for this post or page is closed.</p>';
}




echo '
	</div>
</div>';


?>
