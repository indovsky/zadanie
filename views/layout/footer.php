<footer class="site-footer">
	<div class="container">
		<div class="row gy-5 gx-4">
			<!-- Col 1 -->
			<div class="col-12 col-xxl-3 site-footer__col">
				<?php 
					// Logo 
                    get_template_part( 
                        'views/components/logo',
                        null,
                        [ 'class_name' => 'site-footer__brand' ]
					);

					// Socials
					get_template_part( 'views/components/socials' );
                ?>
			</div>
			<!-- Col 2 -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 site-footer__col">
				<h4 class="site-footer__col__title">Kontakt</h4>
				<address>
					ul. <?php the_field( 'street', 'options' ); ?>
					</br>
					<?php 
						the_field( 'zip', 'options' );
						echo ' ';
						the_field( 'city', 'options' ); 
					?>
				</address>
				<a href="" class="btn btn--primary btn--outline">
					Pełny kontakt
					<svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
						<path
							d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
							transform="translate(-2 -5)" fill-rule="evenodd" />
					</svg>
				</a>
			</div>
			<!-- Col 3 -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 site-footer__col">
				<h4 class="site-footer__col__title">Oferta</h4>
				<ul class="site-footer__col__list">
					<?php 
						$page_repository = new \Repository\Page;
						$offer_children = $page_repository->get_by_parent( 16 );
						foreach( $offer_children as $offer ):
					?>
						<li class="site-footer__col__list__item">
							<a class="site-footer__col__list__item__link" href="<?php the_permalink( $offer->ID ); ?>" title="<?php echo $offer->post_title; ?>">
								<?php echo $offer->post_title; ?>
							</a>
						</li>
					<?php 
						endforeach;
						wp_reset_postdata();
					?>
				</ul>
			</div>
			<!-- Col 4 -->
			<div class="col-12 col-sm-6 col-lg-4 col-xl-3 site-footer__col">
				<h4 class="site-footer__col__title">Informacje</h4>
				<ul class="site-footer__col__list">
					<li class="site-footer__col__list__item">
						<a class="site-footer__col__list__item__link" href="">O nas</a>
					</li>
					<li class="site-footer__col__list__item">
						<a class="site-footer__col__list__item__link" href="">Polityka prywatności</a>
					</li>
					<li class="site-footer__col__list__item">
						<a class="site-footer__col__list__item__link" href="">Polityka plików cookies</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<hr class="site-footer__divider">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="site-footer__copyrights">
					<span>Copyright <?php echo date( 'Y' ); ?></span>
					<div>
						Created by
						<a href="https://specialspace.pl/" target="_blank" rel="noopener noreferrer" title="Agencja Interaktywna Special Space - Strony i sklepy internetowe">
							<img src="<?php echo get_assets_uri( 'images', 'special-space-logo.png' ) ?>" alt="Special Space">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>