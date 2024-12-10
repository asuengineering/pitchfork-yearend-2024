<?php
/**
 *
 * Template name: 2024 YIR
 * An additional template based on page.php
 *
 * @package pitchfork-yearend-2024
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

	<main id="skip-to-content" <?php post_class('boxed'); ?>>

		<section class="page-wrap">

			<?php

			while ( have_posts() ) {

				the_post();

				the_content();

				// Display the edit post button to logged in users.
				if ( is_user_logged_in() ) {
					echo '<footer class="entry-footer"><div class="container"><div class="row"><div class="col-md-12">';
					edit_post_link( __( 'Edit', 'pitchfork' ), '<span class="edit-link">', '</span>' );
					echo '</div></div></div></footer><!-- end .entry-footer -->';
				}
			}

			?>

		</section>

	</main><!-- #main -->

<?php
get_footer();

