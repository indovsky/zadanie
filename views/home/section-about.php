<!-- About section -->
<section id="about" class="section section--without-padding section--is-dark">
    <div class="container">
        <div class="row">
            <!-- First col -->
            <div class="col-12 col-xl-6 section__column-with-padding">
                <?php if( get_field( 'about_subtitle' ) ): ?>
                <p class="section__subtitle">
                    <?php the_field( 'about_subtitle' ); ?>
                </p>
                <?php endif; ?>
                <h2 class="section__title">
                    O firmie
                </h2>
                <div class="section__desc">
                    <?php the_field( 'about_desc' ); ?>
                </div>
                <a href="<?php echo esc_url( get_page_link( 14 ) ); ?>" class="btn btn--outline btn--primary section__read-more-btn" title="Dowiedz się więcej o naszej firmie">
                    Dowiedz się więcej
                    <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10"
                        viewBox="0 0 16 10">
                        <path
                            d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
                            transform="translate(-2 -5)" fill-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <!-- Second col -->
            <div class="col-12 col-xl-6 d-none d-xl-flex img-absolute">
                <img class="img-fluid" src="<?php echo get_assets_uri('images', 'homepage-about.jpg'); ?>" alt="O firmie">
            </div>
        </div>
    </div>
</section>