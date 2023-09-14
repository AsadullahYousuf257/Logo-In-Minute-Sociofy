<?php
function theme_function(){
    wp_enqueue_style('stylesheet_css', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/assets/css/fontawesome.css' );

    wp_enqueue_style('owl_css', get_template_directory_uri() . '/assets/css/owl.css' );

    wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/css/animate.css' );

    wp_enqueue_style('bundle-min_css', get_template_directory_uri() . 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );

    wp_enqueue_style('bootstrap-min_css', get_template_directory_uri() . 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );

    
  

}

add_action('wp_enqueue_scripts' , 'theme_function');

function theme_js(){
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery'), ' ' , true );

    wp_enqueue_script( 'javascript_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), ' ' , true );

    wp_enqueue_script( 'isotope_js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), ' ' , true );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), ' ' , true );

    wp_enqueue_script( 'owlcarousel_js', get_template_directory_uri() . '/assets/js/tabs.js
', array('jquery'), ' ' , true );

    wp_enqueue_script( 'popup_js', get_template_directory_uri() . '/assets/js/popup.js', array('jquery'), ' ' , true );


wp_enqueue_script( 'custom_js ', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), ' ' , true );
}

add_action('wp_enqueue_scripts' , 'theme_js');


// function theme_menu(){
//     register_nav_menu('primary','Top Navigation');

//     register_nav_menus( array( 'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ) ) );    

// }



add_action('init','theme_menu');

add_theme_support('post-thumbnails');

// Add logo

function Mytheme_logo_setup(){
    add_theme_support( 'Custom_logo', array(
        'height' => 50,
        'width' => 100,
        'flex-width' => true,
    ) );
}

add_action( 'after_setup_theme', 'Mytheme_logo_setup' );



if ( ! function_exists( 'soc_fs' ) ) {
    // Create a helper function for easy SDK access.
    function soc_fs() {
        global $soc_fs;

        if ( ! isset( $soc_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $soc_fs = fs_dynamic_init( array(
                'id'                  => '12108',
                'slug'                => 'sociofy',
                'premium_slug'        => 'Sociofy',
                'type'                => 'theme',
                'public_key'          => 'pk_04f64251251b84d54ad70bf2793dc',
                'is_premium'          => true,
                'is_premium_only'     => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'is_org_compliant'    => false,
                'menu'                => array(
                    'first-path'     => 'themes.php',
                    'contact'        => false,
                    'support'        => false,
                ),
                // Set the SDK to work in a sandbox mode (for development & testing).
                // IMPORTANT: MAKE SURE TO REMOVE SECRET KEY BEFORE DEPLOYMENT.
                'secret_key'          => 'undefined',
            ) );
        }

        return $soc_fs;
    }

    // Init Freemius.
    soc_fs();
    // Signal that SDK was initiated.
    do_action( 'soc_fs_loaded' );
}


?>

