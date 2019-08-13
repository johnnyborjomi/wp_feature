<!DOCTYPE html>
<html><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
<body>
<?php get_header() ?>
    <div class="container">
        <?php
        $recent_posts_array = get_posts();
        foreach( $recent_posts_array as $recent_post_single ) :
            echo '<a href="' . get_permalink( $recent_post_single ) . '">' . the_post_thumbnail() . '</a>';
            echo '<h2>' . $recent_post_single->post_title . '</h2>';
            echo '<span>'. $recent_post_single->post_date .'</span>';
            echo '<p>'. $recent_post_single->post_content .'</p>';
        endforeach;
        ?>
    </div>

<?php wp_footer() ?></body>
</html>