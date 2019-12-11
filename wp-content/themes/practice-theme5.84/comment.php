<!-- This file specifies exactly how an individual comment will look at a granular level-->	

<div class='<?php comment_class(); ?>'>

	<?php 


$author_username 	= get_comment_author();

$comment_info	= get_comment();

	print_r($comment_info);

	//$author_info 		= get_the_author_meta( 'ID' );

	//echo $author_info;
	//exit;

	//echo $author_username . "----";
	echo get_avatar( $author_username );


	comment_text(); 
	

	?>
	<?php comment_author(); ?> | <?php comment_date( 'm-d-y g:ia' ); ?>

</div>


