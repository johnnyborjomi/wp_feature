<header>
    <div class="container">
        <div class="row">
            <div class="logo col">
                <h1><a href="/"><img src="<?php echo get_template_directory_uri() . '/dist/assets/icons/feature-logo.png' ?>" alt="Logo"><span>Feature</span></a></h1>
            </div>
            <nav class="col nav">
                <ul class="nav-level-1">
                    <li class="nav-share">
                        Share
                        <?php
                        $args = array(
                            'theme_location' => 'head_menu_share'
                        );
                        wp_nav_menu( $args );
                        ?>
                    </li>
                    <li class="nav-search"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/dist/assets/icons/search.svg' ?>" alt=""></a></li>
                    <li class="nav-account"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/dist/assets/icons/user-male-black-shape.svg' ?>" alt=""></a></li>
                </ul>

            </nav>
        </div>

    </div>
</header>
