<?php

// Custom Callback
function reativ_slug_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	    
		<div class="comment-wrap">
            <div class="comment-header">
                <div class="comment-img">
                    <?= get_avatar($comment, $args['avatar_size'], null, null, ['class' => ['img-responsive', 'rounded-circle']]); ?>
                </div>
                <div class="comment-author">
                    <?php echo get_comment_author_link(); ?>
                </div>
                <div class="comment-date" style="margin-top: 3px;"><?php printf(__('%1$s at %2$s', 'your-text-domain'), get_comment_date(),  get_comment_time()) ?></div>    
            </div>
			<div class="comment-body">
				<?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment waiting review', 'your-text-domain'); ?></em><br /><?php } ?>
				<?php comment_text(); ?>
				<span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'your-text-domain'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
			</div>
		</div>
<?php }
add_action('wp_enqueue_scripts', 'reativ_slug_public_scripts');

function reativ_slug_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}
add_action('wp_enqueue_scripts', 'reativ_slug_public_styles');

function reativ_slug_public_styles() {
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}

function comment_form_change_cookies_consent( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent col-md-12"><input id="wp-comment-cookies-consent" class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent" class="custom-control-label">&nbsp;&nbsp;Concordo com os <a href="/termos-e-condicoes">Termos e Condições</a> e <a href="/politica-de-privacidade">Politica de Privacidade</a></label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' );