<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>



</div>
<div class="naslov text-center" style="background: <?php echo get_field('color', bbp_get_topic_forum_id()); ?>;">
    <div class="container">
<span class="status">
<?php do_action( 'bbp_theme_before_topic_title' ); ?>
</span>
        <span class="kategorija text-uppercase"><a style="color: <?php echo get_field('color', bbp_get_topic_forum_id()); ?>;" href="<?php echo bbp_get_forum_permalink( bbp_get_topic_forum_id()) ?>"><?php echo bbp_get_forum_title( bbp_get_topic_forum_id()) ?></a></span>
        <h1><?php echo bbp_get_topic_title(); ?></h1>
    </div>
</div>


<div class="container">

    <div class="row">

        <div class="col-md-10 col-xs-12 col-sm-12">

            <?php do_action( 'bbp_template_before_single_topic' ); ?>

            <?php if ( post_password_required() ) : ?>

                <?php bbp_get_template_part( 'form', 'protected' ); ?>

            <?php else : ?>


                <?php if ( bbp_show_lead_topic() ) : ?>

                    <?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

                <?php endif; ?>

                <?php if ( bbp_has_replies() ) : ?>


                    <?php bbp_get_template_part( 'loop',       'replies' ); ?>

                    <?php bbp_get_template_part( 'pagination', 'replies' ); ?>

                <?php endif; ?>

                <?php bbp_get_template_part( 'form', 'reply' ); ?>

            <?php endif; ?>

            <?php do_action( 'bbp_template_after_single_topic' ); ?>

        </div>


        <div class="col-md-2 col-xs-12 col-sm-12">
            <?php if ( is_user_logged_in() ) : ?>
            <a class="btn btn-warning btn-block zapocni-temu" href="#new-post" style="background: <?php echo get_field('color', bbp_get_topic_forum_id()); ?>;border-color:<?php echo get_field('color', bbp_get_topic_forum_id()); ?>;"><?php _e( 'Reply', 'bbpress' ); ?></a>
                <button class="btn btn-default btn-block" style="margin-bottom: 30px;">
                    <?php bbp_user_favorites_link(array( 'before' => '', 'favorite' => '<i class="fa fa-star" aria-hidden="true"></i> '. translate('Favorite', bbpress) .'', 'favorited' => '<i class="fa fa-star-o" aria-hidden="true"></i> '. translate('Unfavorite', bbpress) .' ' ) ); ?>
                </button>
            <?php endif; ?>
            <?php if ( bbp_allow_topic_tags() ) : ?>
                <div class="naslovi">
                    <h3 class="text-uppercase"><?php _e( 'Tags:', 'bbpress' ); ?></h3><hr>
                    <span class="oznake">
			            <?php bbp_topic_tag_list( '', array('before' => '', 'sep' => '', 'after' => '') ); ?>
			</span>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=683230681834225";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

