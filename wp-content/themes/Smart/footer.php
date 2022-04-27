</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="col">
                <?php if ( get_field('podval_napravleniya', 'options') ) : ?>
                    <div class="footer__title"><?=get_field('podval_napravleniya', 'options'); ?></div>
                <?php endif;

                wp_nav_menu(array( 'theme_location' => 'directions' )); ?>
            </div>

            <div class="col">
                <?php if ( get_field('podval_tehnologii', 'options') ) : ?>
                    <div class="footer__title"><?=get_field('podval_tehnologii', 'options'); ?></div>
                <?php endif;

                wp_nav_menu(array( 'theme_location' => 'technology' )); ?>
            </div>

            <div class="col">
                 <?php if ( get_field('podval_sobytiya', 'options') ) : ?>
                    <div class="footer__title"><?=get_field('podval_sobytiya', 'options'); ?></div>
                <?php endif; ?>

            </div>

            <div class="col">
                <div class="footer__subscription">
                    <?php if ( get_field('subscription_title', 'options') ) : ?>
                        <div class="footer__subscription-title"><?=get_field('subscription_title', 'options'); ?></div>
                    <?php endif;

                    if ( get_field('subscription_descr', 'options') ) : ?>
                        <div class="footer__subscription-descr"><?=get_field('subscription_descr', 'options'); ?></div>
                    <?php endif; ?>

                    <form action="#">
                        <input type="email" placeholder="E-mail" required>
                        <button type="submit">Подписаться</button>

                        <div class="form_term">
                            <input type="checkbox" id="cofirm">
                            <label for="cofirm">Я согласен с условиями использования
                                и <a href="#">политикой конфиденциальности</a></label>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <?php if ( get_field('logo_white', 'options') ) : $img = get_field('logo_white', 'options'); ?>
                <a href="<?=get_home_url(); ?>" class="footer__logo">
                    <img src='<?=esc_url($img['url']) ?>' alt='<?=esc_attr($img['alt']); ?>'>
                </a>
            <?php endif;

            wp_nav_menu(array( 'theme_location' => 'Footer', 'menu_class' => 'footer__bottom-list' ));

            if( have_rows('social', 'options') ): ?>
                <div class="footer__bottom-social">
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
</footer>

<?php wp_footer(); ?>

</body>
</html>