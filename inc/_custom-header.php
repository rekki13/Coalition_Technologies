<header id="header" class="header">
    <div class="container">
        <div class="wrapper">
            <div class="header__left">
                <a href="/"><?= wp_get_attachment_image( get_option( 'custom_logo' ),
						'full', false,
						array( 'class' => 'header__left-logo' ) ); ?></a>

            </div>
            <div class="header__right">
                <div class="header__right-quarter">
                    <a class="toggle-nav" href="#">&#9776;</a>
                </div> <!-- .one-half right -->

                <nav id="site-navigation" class="menu main-navigation main">

					<?php wp_nav_menu( array(
						'container_class' => 'main-nav menu-1 ',
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'nav-menu'

					) ); ?>
                </nav><!-- .main -->
            </div>
        </div>
    </div>
</header><!-- #masthead -->

