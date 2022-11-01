<?php if( has_custom_logo() ) : the_custom_logo(); else : ?>
<a class="<?php echo array_key_exists('class_name', $args) ? esc_attr($args['class_name']) : ''; ?>"
    href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
</a>
<?php endif; ?>