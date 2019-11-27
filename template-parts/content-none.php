<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Suki
 */

?>

<section class="no-results not-found">
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<h1><?php esc_html_e( 'Nothing Found', 'suki' ); ?></h1>
			<p>
				<a href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>"><?php esc_html_e( 'Ready to publish your first post? Get started here.', 'suki' ); ?></a>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>
				<?php esc_html_e( 'Entschuldigung, es konnten keine Posts mit diesen Parametern gefunden werden. Bitte versuchen Sie es mit anderen Keywords erneut.', 'suki' ); ?>
			</p>

		<?php else : ?>

			<p>
				<?php esc_html_e( 'Es sieht so aus, als könnten wir die gesuchten Inhalte nicht finden. Bitte versuchen sie das Nutzen der Suchfunktion.', 'suki' ); ?>
			</p>

			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
