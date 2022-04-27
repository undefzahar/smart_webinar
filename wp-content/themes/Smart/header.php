<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header__top">
			<div class="container">
				<?php wp_nav_menu(array( 'theme_location' => 'Header', 'menu_class' => 'header__top-menu' ));
				
				if( have_rows('social', 'options') ): ?>
					<div class="header__top-social">
						<?php while( have_rows('social', 'options') ): the_row();
							if( get_sub_field('url') && get_sub_field('icon') ):
								$img = get_sub_field('icon'); ?>

								<a href='<?=esc_url( get_sub_field('url') ); ?>'>
									<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
								</a>
							<?php endif;
						endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="container">
			<?php if ( get_field('logo', 'options') ) : $img = get_field('logo', 'options'); ?>
				<a href="<?=get_home_url(); ?>" class="header__logo" target="_blank">
					<img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
				</a>
			<?php endif; ?>

			<div class="header__wrap">
				<?php wp_nav_menu(array( 'theme_location' => 'Header menu', 'menu_class' => 'header__menu' )); ?>
			
				<div class="header__search">
					<img src="build/img/icons/search.svg" alt="">
				</div>
			</div>
		</div>
	</header>

	<main <?php body_class(); ?>>
		