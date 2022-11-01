<!-- Offer section -->
<section id="offer" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <p class="section__subtitle">LOREM IPSUM DOLOR SIT</p>
                <h2 class="section__title">Oferta</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 cards-wrapper offer-cards">
                <?php 
                    $offers = get_field('offer_slider');

                    foreach( $offers as $offer ) {
                        get_template_part( 'views/components/offer-card', 
                            null, 
                            [
                                'title' =>  $offer['title'],
                                'desc'  =>  $offer['desc'],
                                'link'  => $offer['link'],
                                'icon'  =>  [
                                    'src'   =>  $offer['icon']['url'],
                                    'alt'   => $offer['icon']['alt']
                                ]
                            ] 
                        );
                    }
                ?>
            </div>
        </div>
    </div>
</section>