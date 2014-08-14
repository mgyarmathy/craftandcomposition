<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package craftandcomposition
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <button id="texpapertan">Textured Paper (tan)</button>
            <button id="texpaper">Textured Paper</button>
            <button id="knit">Knitted Sweater</button>
            <button id="stripes">Textured Stripes</button>
            <button id="paper">Lined Paper</button>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#texpapertan').click(function() { $('body').css('backgroundImage', 'url("/wp-content/themes/CraftAndComposition/images/textured_paper_tan.png")');});
                $('#texpaper').click(function() { $('body').css('backgroundImage', 'url("/wp-content/themes/CraftAndComposition/images/textured_paper.png")');});
                $('#knit').click(function() { $('body').css('backgroundImage', 'url("/wp-content/themes/CraftAndComposition/images/knitting.png")');});
                $('#stripes').click(function() { $('body').css('backgroundImage', 'url("/wp-content/themes/CraftAndComposition/images/textured_stripes.png")');});
                $('#paper').click(function() { $('body').css('backgroundImage', 'url("/wp-content/themes/CraftAndComposition/images/linedpaper.png")');});
            });
            </script>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php CraftAndComposition_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
