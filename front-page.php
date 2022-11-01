<?php
    get_header();
?>

<main id="primary" class="site-main">

    <?php 
        get_template_part( 'views/home/section-about' );
        get_template_part( 'views/home/section-benefits' );
        get_template_part( 'views/home/section-offer' );
        get_template_part( 'views/components/cta-section', 
            null, 
            [
                'title' =>  'Zainteresowany? <strong>Porozmawiaj z naszym doradcą</strong>',
                'button'    =>  [
                    'title' =>  'Zadzwoń teraz'
                ]
            ] 
        );
        get_template_part( 'views/home/section-blog' );
    ?>

    <!-- Last section -->
    <section id="last" class="section">
        <div class="container">

            <div class="row g-5">
                <div class="col-12 col-lg-8 col-xl-5">
                    <div class="mt-xl-5 pt-xl-3">
                        <?php if( get_field( 'lorem_subtitle' ) ): ?>
                            <p class="section__subtitle">
                                <?php the_field( 'lorem_subtitle' ); ?>
                            </p>
                        <?php endif; ?>
                        <h2 class="section__title">Lorem ipsum</h2>
                        <div class="section__desc">
                            <?php the_field( 'lorem_desc' ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-7 d-flex justify-content-end">
                    <?php $last_section_img = get_field( 'lorem_image' ); ?>
                    <img class="img-fluid" src="<?php echo $last_section_img['url'] ?>" alt="<?php echo $last_section_img['alt'] ?>">
                </div>
            </div>

        </div>
    </section>

</main><!-- #main -->

<?php
    get_footer();