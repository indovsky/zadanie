<!-- Benefits section -->
<section id="benefits" class="section">
    <div class="container">
        <div class="row benefits">
            <?php 
                $benefits = get_field('benefits');

                foreach( $benefits as $item ) {
                    get_template_part( 'views/home/benefits-item', 
                        null, 
                        [
                            'title' =>  $item['title'],
                            'icon'    =>  $item['icon']
                        ] 
                    );
                }
            ?>
        </div>
    </div>
</section>