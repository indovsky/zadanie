<a class="card" href="<?php echo $args['url']; ?>" title="<?php echo esc_html( $args['title'] ); ?>">
    <div class="card__header">
        <img class="card__header__thumbnail" src="<?php echo esc_url( esc_attr( $args['thumbnail']['src'] ) ); ?>" alt="<?php echo esc_attr( $args['thumbnail']['alt'] ); ?>">
    </div>
    <div class="card__body">
        <div class="card__desc">
            <h3 class="card__title"><?php echo esc_html( $args['title'] ); ?></h3>
            <p><?php echo esc_html( $args['desc'] ); ?> </p>
        </div>
    </div>
</a>