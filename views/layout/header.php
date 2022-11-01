<!-- Top bar -->
<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php get_template_part( 'views/components/socials' ) ?>
			</div>
		</div>
	</div>
</div>

<!-- Navbar -->
<?php get_template_part( 'views/components/navbar' ) ?>

<!-- Header -->
<header class="site-header <?php echo ! is_front_page() ? 'site-header--is-small' : ''; ?>" style="<?php echo get_site_header_background(); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="site-header__content">
					<!-- Site header on homepage -->
					<?php if( is_front_page() ) : ?>
					<div class="site-header__slider swiper">
						<!-- Slider -->
						<div class="swiper-wrapper">
							<?php 
								$slider = get_field( 'slider' );

								foreach( $slider as $key => $slide ):
									$title = $slide['title'];
							?>
								<div class="swiper-slide">
									<p class="site-header__subtitle"><?php echo $slide['subtitle']; ?></p>
									
									<?php if( $key === array_key_first($slider) ): ?>
										<h1 class="site-header__title"><?php echo $title; ?></h1>
									<?php else: ?>
										<h2 class="site-header__title"><?php echo $title; ?></h2>
									<?php endif ?>

									<?php if( $slide['show_button'] ): ?>
										<a href="<?php echo $slide['link']; ?>" class="btn btn--outline" title="Sprawdź ofertę">
											Sprawdź ofertę
											<svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
												<path d="M12.293,5.293a1,1,0,0,1,1.414,0l4,4a1,1,0,0,1,0,1.414l-4,4a1,1,0,1,1-1.414-1.414L14.586,11H3A1,1,0,0,1,3,9H14.586L12.293,6.707a1,1,0,0,1,0-1.414Z"
													transform="translate(-2 -5)" fill-rule="evenodd" />
											</svg>
										</a>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>

						<!-- Slider navigation -->
						<div class="site-header__slider__nav">
							<div class="swiper-button-prev">
								<img class="icon" src="<?php echo get_assets_uri('images', 'arrow.svg'); ?>" width="16" height="10" alt="Poprzedni">
							</div>
							<div class="swiper-button-next">
								<img class="icon" src="<?php echo get_assets_uri('images', 'arrow.svg'); ?>" width="16" height="10" alt="Następny">
							</div>
						</div>
					</div>
					<?php else : ?>
						<!-- Site header on other pages -->
						<p class="site-header__subtitle">LOREM IPSUM DOLOR SIT AMET CONSECTATUR</p>
						<h1 class="site-header__title"><?php the_title(); ?></h1>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>