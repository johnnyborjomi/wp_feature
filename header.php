<header>
    <div class="logo">
        <h1><a href="/"><img src="" alt="Feature"><span>Feature</span></a></h1>
    </div>
    <nav>
        <ul>
            <li>
                Share
                <?php
                $args = array(
                    'theme_location' => 'head_menu_share'
                );
                wp_nav_menu( $args );
                ?>
            </li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>

    </nav>
</header>