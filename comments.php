<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Appetizer_Light
 * @since 1.0.0
 * @version 1.0.0
 * @author Alian Schiavoncini <alian@alian.it>
 */
?>
<!-- comments-section -->
<div class="comments-section">
<?php
if ( post_password_required() ) :
?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'appetizer-light' ); ?></p>
</div>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
endif;
?>

<?php if ( have_comments() ) : ?>

	<p class="title-section"><?php comments_number( __( 'No Comments', 'appetizer-light' ), __( 'One Comment', 'appetizer-light' ), __( '% Comments', 'appetizer-light' ) );?></p>
 
	<!-- commentlist -->
    <ol class="commentlist">
		<?php
			/* 
			 * Loop through and list the comments. Tell wp_list_comments() to use appetizer_comments() to format the comments.
			 */
			wp_list_comments( array( 'callback' => 'appetizer_comments' ) );
		?>
	</ol> <!-- /commentlist -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <div class="navigation">
        <?php
            paginate_comments_links( 
                array(
                    'prev_text' => __( '<span class="meta-nav">&larr;</span> Older Comments', 'appetizer-light' ), 
                    'next_text' => __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'appetizer-light' )
                )
            );
        ?>
    </div> <!-- /navigation -->
    <?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

		/* If there are no comments and comments are closed,
		 * let's leave a little note, shall we?
		 */
		if ( ! comments_open() ) : 
?>
		<p class="title-section"><?php _e( 'Comments are closed.', 'appetizer-light' ); ?></p>
<?php 	endif; ?>

<?php endif; ?>

<?php 
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$custom_comment_form = array( 
		'fields' => apply_filters( 'comment_form_default_fields', 
						array(
							'author' => '<div class="form-group">
										<label for="author" class="comment-label">' . __( 'Your Name' , 'appetizer-light' ) . ( $req ? ' <span class="required_lab">*</span>' : '' ) . '</label> 
										<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' class="form-control required" required="required">
										</div>',
							'email' => '<div class="form-group">
										<label for="email" class="comment-label">' . __( 'Your Email' , 'appetizer-light' ) . ( $req ? ' <span class="required_lab">*</span>' : '' ) . '</label> 
										<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' class="form-control required" required="required">
										</div>',
							'url' => '<div class="form-group">
										<label for="url" class="comment-label">' . __( 'Your Website' , 'appetizer-light' ) . '</label> 
										<input id="url" name="url" type="text" value="' . esc_attr(  $commenter['comment_author_url'] ) . '"' . $aria_req . ' class="form-control">
										</div>')
							),
							'comment_field' => '<div class="form-group">
										<label for="comment" class="comment-label">' . __( 'Comment' , 'appetizer-light' ) . '</label> 
										<textarea id="comment" name="comment" rows="6" aria-required="true" class="form-control required" required="required"></textarea>
										</div>',
							'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out?</a>', 'appetizer-light' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>',
							'title_reply' => '<p class="title-section">' . __( 'Leave a Reply' , 'appetizer-light' ) . '</p>',
							'cancel_reply_link' => __( 'Cancel' , 'appetizer-light' ),
							'label_submit' => __( 'Submit Comment' , 'appetizer-light' ),
							'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-primary btn-comment" value="%4$s" />',
							'comment_form_after' => '<hr>',
							);
comment_form( $custom_comment_form ); 
?>
</div> <!-- /comments-section -->