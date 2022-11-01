<nav class="site-navbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="site-navbar__wrapper">
                    <!-- Logo -->
                    <?php 
                        get_template_part( 
                            'views/components/logo',
                            null,
                            [
                                'class_name' => 'site-navbar__brand'
                            ]
                        )
                    ?>

                    <!-- Menu -->
                    <nav class="navbar">
                        <?php render_site_menu(); ?>
                        <a class="btn btn--primary btn--lg btn--uppercase btn--no-border cta" href="" title="Darmowa wycena">
                            Darmowa wycena
                        </a>
                    </nav>

                    <!-- Menu toggler -->
                    <button class="site-navbar__toggler hamburger hamburger--squeeze">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>