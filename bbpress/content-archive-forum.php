<?php

/**
 * Archive Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<div class="row">

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<a class="btn btn-danger btn-block zapocni-temu" href="<?php echo esc_url( home_url(bbp_get_root_slug())); ?>/#new-post "><?php _e( 'Create New Topic', 'bbpress' ); ?></a>
				</div>
				<div class="col-md-10">
					<div class="lista_kategorija">
					<ul class="list-inline" style="margin-top: 10px;">
						<li <?php if ( is_archive('forum')) { echo ' class="active"'; } ?>><a href="<?php echo esc_url(home_url(bbp_get_root_slug())); ?>"><i class="fa fa-comments-o"></i> <?php _e( 'All Topics', 'bbpress' ); ?></a></li>
					</ul>
					</div>
				</div>

			</div>
		</div>

	<div class="col-md-12">

	<?php bbp_forum_subscription_link(); ?>

	<?php do_action( 'bbp_template_before_forums_index' ); ?>

	<?php if ( bbp_has_forums() ) : ?>

		<?php bbp_get_template_part( 'loop',     'forums'    ); ?>

	<?php else : ?>

		<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_forums_index' ); ?>

</div>


