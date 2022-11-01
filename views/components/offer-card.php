<div class="card">
    <div class="card__header card__header--is-centered">
        <div class="card__header__icon-container">
            <img class="card__header__icon-container__icon" src="<?php echo esc_attr( $args['icon']['src'] ); ?>"
                alt="<?php echo esc_attr( $args['icon']['alt'] ); ?>">
        </div>
    </div>
    <h3 class="card__title card__title--is-centered"><?php echo $args['title']; ?></h3>
    <div class="card__body card__body--is-centered">
        <div class="card__desc">
            <?php echo $args['desc']; ?>
        </div>
        <a href="<?php echo esc_url( $args['link'] ); ?>" class="btn btn--outline btn--primary btn--text-dark">
            Sprawdź ofertę
            <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                <path
                    d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
                    transform="translate(-2 -5)" fill-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>