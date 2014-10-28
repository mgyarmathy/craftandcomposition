<?php
/**
 * @package craftandcomposition
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php CraftAndComposition_posted_on(); ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'CraftAndComposition' ) );
				if ( $categories_list && CraftAndComposition_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( ' in %1$s', 'CraftAndComposition' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'CraftAndComposition' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'CraftAndComposition' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php $first_image = get_first_image();
		if ($first_image != '') { ?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $first_image ?>" alt="<?php the_title(); ?>"/></a>
		<?php } ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" title="Read the rest of <?php the_title(); ?>" class="more-link">Read More</a>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'CraftAndComposition' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->