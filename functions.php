<?php
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'head_menu_share' => 'Header Share',
        )
    );

    add_action( 'wp_enqueue_scripts', 'wp_feature_scripts' );
    function wp_feature_scripts() {
        wp_register_style( 'styles', get_template_directory_uri() . '/dist/styles.css', array());
        wp_register_script( 'script', get_template_directory_uri() . '/dist/public.js');


        wp_enqueue_style( 'styles');
        wp_enqueue_script( 'script');
    }

function true_load_posts(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

    $posts = query_posts( $args );

    if( have_posts() ) :


        $recent_posts_array = get_posts($posts);
        foreach( $recent_posts_array as $recent_post_single ) :
//              echo '<a href="' . get_permalink( $recent_post_single ) . '">' . the_post_thumbnail() . '</a>';
            echo
                '<div class="post col-xs-12 col-sm-6 col-md-4">'.
                '<a href="#" class="post-thumbnail"><img src="" alt=""></a>'.
                '<span>'. $recent_post_single->post_date .'</span>'.
                '<h2>' . $recent_post_single->post_title . '</h2>'.
                '<p>'. $recent_post_single->post_content .'</p>'.
                '</div>'
            ;
        endforeach;

    endif;
    die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

