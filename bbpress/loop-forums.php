<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>

<ul id="forums-list-<?php bbp_forum_id(); ?>" class="list-unstyled">
	<li>


		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>
			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>
		<?php endwhile; ?>


	</li>
</ul>

<?php do_action( 'bbp_template_after_forums_loop' ); ?>
