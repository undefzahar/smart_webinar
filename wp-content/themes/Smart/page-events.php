<?php
/*
* Template name: Мероприятия
* */

get_header(); ?>

<section class="page-events">
	<div class="container">
		<h1>Мероприятия</h1>
		
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    	$post_per_page = 9;
		$args = [
			'post_type' => 'events',
			'posts_per_page' => $post_per_page,
			'paged' => $paged,
			'post_status' => 'publish',
		];

		$query = new WP_Query($args);
		
		if ($query->have_posts()) : ?>
			<div class="page-events__list">

				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="page-events__item">
						<div class="page-events__item-date"><?=get_the_date(); ?></div>
						<h3 class="page-events__item-title">
							<?php the_title(); ?>
						</h3>
					</a>
				<?php endwhile;		
				wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>