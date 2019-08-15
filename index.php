<!DOCTYPE html>
<html><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
<body>
<?php get_header() ?>
    <main>
        <div class="container posts-area">
            <div class="row posts-container">
                <?php
                $args = array(
                    'posts_per_page' => 5,
                    'order' => 'ASC'
                );

                $recent_posts_array = get_posts($args);
                foreach( $recent_posts_array as $recent_post_single ) :
//              echo '<a href="' . get_permalink( $recent_post_single ) . '">' . the_post_thumbnail() . '</a>';
                    echo
                        '<div class="post col-xs-12 col-sm-6 col-md-4">'.
                        '<div class="post-thumbnail"></div>'.
                        '<span>'. $recent_post_single->post_date .'</span>'.
                        '<h2>' . $recent_post_single->post_title . '</h2>'.
                        '<p>'. $recent_post_single->post_content .'</p>'.
                        '</div>'
                    ;
                endforeach;
                ?>
            </div>
            <!--            todo: condition to show button-->
            <?php if (true) : ?>
                <script>
                    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                </script>
                <div class="text-center">
                    <button class="js-ajax-post-loader btn btn--primary">Load More</button>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <?php wp_footer() ?>
</body>
</html>