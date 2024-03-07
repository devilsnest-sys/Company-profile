<?php
    function enqueue_styles_and_scripts(){
        wp_enqueue_style('bootstrap', get_template_directory_uri()."/css/bootstrap.css", array(), '1.0', 'all' );
        wp_enqueue_style('style', get_template_directory_uri()."/css/styles.css", array(), '1.0', 'all' );
        wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/js/bootstrap.js", array(), '1.0', 'all' );
        wp_enqueue_script('jquery-js', "https://code.jquery.com/jquery-3.6.0.min.js", array(), '1.0', 'all' );
        wp_enqueue_script('slick-js', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", array(), '1.0', 'all' );
        wp_enqueue_script('custom-js', get_template_directory_uri()."/js/custom-script.js", array(), '1.0', 'all' );
        if (is_front_page()) {
            wp_enqueue_script('scroll-cdn-js', "https://rawcdn.githack.com/flackr/scroll-timeline/3063e156535f3ab1ffc8a4000ffdd3290232c121/dist/scroll-timeline.js", array(), '1.0', 'true');
            wp_enqueue_script('scroll-js', get_template_directory_uri() . "/js/double-scroll.js", array(), '1.0', 'all');
        }
        
    }
    add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');

    function custom_template_directory_uri_shortcode() {
        return get_template_directory_uri();
    }
    add_shortcode('template_directory_uri', 'custom_template_directory_uri_shortcode');
    
?>
