<?php get_header(); ?>

<section class="single-events">
	<div class="container">
		<div class="single-events__date"><?php the_date(); ?></div>

		<h1 class="single-events__title"><?php the_title(); ?></h1>

		<?php if ( get_field('descr') ) : ?>
			<p><?=get_field('descr'); ?></p>
		<?php endif;

		$category = get_the_terms( get_the_ID(), 'events-category' );

		if( $category ): ?>
			<div class="single-events__category">
				<?php foreach( $category as $cat ): ?>
					<a href="<?=get_term_link($cat->term_id);?>" class="single-events__cat"><span <?php if(get_field('term_color', $cat)): echo 'style="color: '.get_field("term_color", $cat).'; background-color: '.get_field("term_color", $cat).'20;"'; endif;?>><?=$cat->name; ?></span></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>