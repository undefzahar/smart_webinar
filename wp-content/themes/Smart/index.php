<?php get_header(); ?>
<section class="banner">
	<div class="container">

		<div class="banner__wrap">
			<?php if ( get_field('banner_title') ) : ?>
				<h1 class="banner__title"><?=get_field('banner_title'); ?></h1>
			<?php endif;

			if ( get_field('banner_text') ) : ?>
				<p class="banner__text"><?=get_field('banner_text'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="content">
	<div class="container">
		<a href="<?=get_permalink();?>" class="share">
			<svg width="19" height="19" viewBox="0 0 19 19" fill="#5F6B7C" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M13.875 12.6667C13.2512 12.6667 12.6875 12.9121 12.2647 13.3056L6.67875 10.0542C6.71833 9.87212 6.75 9.69004 6.75 9.50004C6.75 9.31004 6.71833 9.12796 6.67875 8.94587L12.26 5.69212C12.6875 6.08796 13.2496 6.33337 13.875 6.33337C15.1892 6.33337 16.25 5.27254 16.25 3.95837C16.25 2.64421 15.1892 1.58337 13.875 1.58337C12.5608 1.58337 11.5 2.64421 11.5 3.95837C11.5 4.14837 11.5317 4.33046 11.5712 4.51254L5.99 7.76629C5.5625 7.37046 5.00042 7.12504 4.375 7.12504C3.06083 7.12504 2 8.18587 2 9.50004C2 10.8142 3.06083 11.875 4.375 11.875C5.00042 11.875 5.5625 11.6296 5.99 11.2338L11.5697 14.4939C11.5251 14.6731 11.5017 14.857 11.5 15.0417C11.5 15.5114 11.6393 15.9706 11.9003 16.3612C12.1612 16.7518 12.5322 17.0562 12.9661 17.2359C13.4001 17.4157 13.8776 17.4627 14.3383 17.3711C14.799 17.2794 15.2222 17.0532 15.5544 16.7211C15.8865 16.3889 16.1127 15.9658 16.2044 15.505C16.296 15.0443 16.249 14.5668 16.0692 14.1328C15.8895 13.6989 15.585 13.3279 15.1945 13.067C14.8039 12.806 14.3447 12.6667 13.875 12.6667Z" />
			</svg>
		</a>

		<?php if(get_field('form')): ?>
			<div class="content__form">
				<?php if ( get_field('form_title') ) : ?>
					<h2 class="content__form-title"><?=get_field('form_title'); ?></h2>
				<?php endif;

				echo do_shortcode( get_field('form') ); ?>
			</div>
		<?php endif; ?>

		<div class="content__wrap">
			<?php if( have_rows('notes') ): ?>
				<ul class="content__info">
					<?php while( have_rows('notes') ): the_row(); ?>
						<li>
							<?php if ( get_sub_field('icon') ) : $img = get_sub_field('icon'); ?>
								<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
							<?php endif;

							if ( get_sub_field('text') ) : ?>
								<p><?=get_sub_field('text'); ?></p>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;

			if ( get_field('content') ) : ?>
				<div class="content__text"><?=get_field('content'); ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="program">
	<div class="container">
		<?php if ( get_field('program_title') ) : ?>
			<h2 class="program__title"><?=get_field('program_title'); ?></h2>
		<?php endif;

		if( have_rows('program_items') ): ?>
			<div class="program__wrap">
				<?php while( have_rows('program_items') ): the_row(); ?>
					<div class="program__item">
						<?php if ( get_sub_field('icon') ) : $img = get_sub_field('icon'); ?>
							<div class="program__item-img">
								<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
							</div>
						<?php endif;

						if ( get_sub_field('text') ) : ?>
							<div class="program__item-text"><?=get_sub_field('text'); ?></div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="speaker">
	<div class="container">
		<div class="speaker__wrap">
			<div class="speaker__head">
				<?php if ( get_field('speaker') ) : ?>
					<h2 class="speaker__title"><?=get_field('speaker'); ?></h2>
				<?php endif; ?>

				<hr>

				<?php if ( get_field('speaker_img') ) : $img = get_field('speaker_img'); ?>
					<div class="speaker__img">
						<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
					</div>
				<?php endif; ?>
			</div>
			<div class="speaker__content">
				<?php if ( get_field('speaker_fio') ) : ?>
					<h3 class="speaker__name"><?=get_field('speaker_fio'); ?></h3>
				<?php endif; ?>

				<?php if ( get_field('speaker_descr') ) : ?>
					<p class="speaker__text"><?=get_field('speaker_descr'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="events">
	<div class="container">
		<div class="events__head">
			<?php if ( get_field('events_title', 'options') ) : ?>
				<h2 class="events__title"><?=get_field('events_title', 'options'); ?></h2>
			<?php endif;

			if(get_field('events_all', 'options') ) : $link = get_field('events_all', 'options'); ?>
				<a href="<?=esc_url( $link['url'] ); ?>" class="events__all">
					<?=esc_html( $link['title'] );

					if ( get_field('arrow_right', 'options') ) : $img = get_field('arrow_right', 'options'); ?>
						<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
					<?php endif; ?>
				</a>
			<?php endif; ?>
		</div>

		<div class="events__wrap">
			<?php
			$args = array(
				'post_type'     => 'events',
				'post_status'   => 'publish',
				'posts_per_page' => 3,
			);
			
			$query = new WP_Query( $args );
			if( $query->have_posts() ):
				while( $query->have_posts() ): $query->the_post(); ?>
					<div class="events__item">
						<?php if ( get_field('img') ) : $img = get_field('img'); ?>
							<a href="<?php the_permalink(); ?>" class="events__item-img">
								<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
							</a>
						<?php endif; ?>

						<div class="events__item-content">
							<div class="events__item-date">
								<?=get_the_date( 'd' ) . ' <span>' . get_the_date( 'M' ) . '</span>'; ?>
							</div>

							<?php $category = get_the_terms( get_the_ID(), 'events-category' );
							$term = array_pop($category);
							if( $term ): ?>
								<div class="events__item-category">
									<?=$term->name; ?>
								</div>
							<?php endif; ?>

							<h3 class="events__item-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

							<?php if ( get_field('descr') ) : ?>
								<p class="events__item-text">
									<a href="<?php the_permalink(); ?>"><?=get_field('descr'); ?></a>
								</p>
							<?php endif;

							$tags = get_the_terms( get_the_ID(), 'events-tags' );
							if( is_array( $tags ) ): ?>
								<ul class="events__item-tags">
									<?php foreach( $tags as $tag ): ?>
										<li><?=$tag->name; ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata();
			endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>