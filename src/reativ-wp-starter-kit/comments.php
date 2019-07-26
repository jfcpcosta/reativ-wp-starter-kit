<?php if ( post_password_required() ) { return; } ?>

<div id="comments" class="comments-area">
    <div class="container">
        <?php if (have_comments()) : ?>
            <h4 class="comments-title"><?php comments_number(__('No comments', 'your-text-domain'), __('1 comment', 'your-text-domain'), '% ' . __('comments', 'your-text-domain') ); ?> in "<?php the_title() ?>"</h4>
            <ul class="comment-list">
                <?php wp_list_comments( array( 'avatar_size' => 70, 'style' => 'ul', 'callback' => 'reativ_slug_comments', 'type' => 'all' ) ); ?>
            </ul>
            <?php the_comments_pagination( array( 'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'Previous', 'your-text-domain') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'your-text-domain') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>', ) ); ?>
        <?php else : ?>
            <h4 class="comments-title">0 comments in "<?php the_title() ?>"</h4>
        <?php endif; ?>
        <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments"><?php _e( 'Comments closed.', 'your-text-domain'); ?></p>
        <?php endif; ?>
    </div>

    <div class="leave-comment">
        <div class="container">
            <div class="row">
                <?php
                    $args = [
                        'class_form' => 'comment-form row',
                        'comment_field' => '<div class="form-group col-md-12"><input type="text" class="form-control" id="comment" name="comment" aria-required="true" placeholder="Comment"></div>',
                        'fields' => apply_filters( 'comment_form_default_fields', [
                            'author' => 
                                '<div class="form-group col-md-6"><input id="author" name="author" type="text" placeholder="Nome"  class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .'"></div>',
                            'email' =>
                                '<div class="form-group col-md-6"><input id="email" name="email" type="text" class="form-control" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"></div>',
                            ]
                        )
                    ]; 
                    comment_form($args); 
                ?>
            </div>
        </div>
    </div>
</div>
