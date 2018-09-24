<?php
/**
 * This is the basic comment section
 *
 * @package viridi
 * @since viridi 0.1
 */

?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) :
				printf( esc_html( __( 'comment', 'viridi' ) ), get_the_title() );
			else :
				printf( esc_html( __( 'comments', 'viridi' ) ), get_the_title() );
			endif;
			?>
		</h2>



		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->



	<?php endif; ?>

	<?php
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<p class="no-comments"><?php echo esc_html( __( 'Comments are closed.', 'viridi' ) ); ?></p>
	<?php endif; ?>

	<?php

		$comments_args = array(
			'label_submit' => __( 'Send', 'viridi' ),
			'title_reply' => __( 'Write a Reply or Comment', 'viridi' ),
			'comment_notes_after' => '',
			'class_form' => 'text-center comment-form',
			'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'viridi' ) . '</label><br /><textarea placeholder="' . __( 'Write something nice','viridi' ) . '" id="comment" name="comment" rows="12" class="form-control" aria-required="true"></textarea></p>',
			'fields' => array( '<label placeholder="' . __( 'Your name','viridi' ) . '" for="author">Name</label></br><input type="text" id="author" name="author" class="form-control" aria-required="true"></input>' , '<label for="name">email</label></br><input placeholder="' . __( 'Your email','viridi' ) . '" type="email" id="email" name="email" class="form-control" aria-required="true"></input>' ),
			'class_submit' => 'submit btn btn-primary btn-lg comment-submit',
		);
		comment_form( $comments_args );
		paginate_comments_links();
		?>

</div><!-- .comments-area -->
