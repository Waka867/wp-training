<!-- This file specifies exactly how an individual comment will look at a granular level-->	

<div id='comment-<?php comment_ID(); ?>' class='<?php comment_class(); ?>'>

	<?php 

	echo get_avatar( get_comment_author_email() );

	//$comment_info	= get_comment();

	//var_dump( $comment_info );

	comment_text(); 

	$comment_reply_args = [
		'depth' 	=> 1,
		'max_depth' 	=> 4
	]

	?>
		<?php comment_author_link(); ?> | <?php comment_date( 'm-d-y g:ia' );?> | <?php comment_reply_link( $comment_reply_args ); ?>

</div>


