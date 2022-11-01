<?php if( get_field( 'phone', 'options' ) ): ?>
<section class="section cta-section">
    <div class="container">
        <div class="row">
            <div class="col-12 cta-section__container">
                <p class="cta-section__title"><?php echo $args['title']; ?></p>
                <a class="btn btn--primary" href="tel:<?php the_field( 'phone', 'options' ); ?>">
                    <?php echo $args['button']['title'] ?>
                    <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                        <path
                            d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
                            transform="translate(-2 -5)" fill-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>