<!-- Blog section -->
<section id="blog" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <p class="section__subtitle">LOREM IPSUM DOLOR SIT</p>
                <h2 class="section__title">Blog</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 cards-wrapper posts-cards">
                <?php
                    $post_repository = new \Repository\Post;
                    $latest_posts = $post_repository->get_latest_posts( 3 );

                    foreach( $latest_posts as $post ) {
                        $post_model =  (new \Models\Post($post));
                        $thumbnail = $post_model->get_thumbnail();
                        $post = $post_model->get();

                        get_template_part( 'views/components/post-card', 
                            null, 
                            [
                                'title' =>  $post->post_title,
                                'desc'  =>  $post->post_excerpt,
                                'url'   => $post_model->get_url(),
                                'thumbnail' =>  [
                                    'src'   => $thumbnail['src'],
                                    'alt'   => $thumbnail['alt']
                                ]
                            ] 
                        );
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <a class="btn btn--outline btn--primary btn--text-dark section__read-more-btn" 
                href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" title="Wszystkie wpisy">
                    Zobacz wszystkie wpisy
                    <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10"
                        viewBox="0 0 16 10">
                        <path
                            d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
                            transform="translate(-2 -5)" fill-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>