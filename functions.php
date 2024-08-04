<?php 

    function forward_together_files() {
        wp_enqueue_style('wildwood_styles', get_theme_file_uri('/assets/css/main.css'));
        wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    }
    
    add_action('wp_enqueue_scripts', 'forward_together_files');

    function my_function_admin_bar(){ return false; }
    add_filter( 'show_admin_bar' , 'my_function_admin_bar')

?>