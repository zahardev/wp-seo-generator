<?php


namespace STG;


class CPT {

    const POST_TYPE = 'seotext';

    private function __construct() {
    }

    public static function init() {
        function wporg_custom_post_type() {

        }
        add_action('init', 'wporg_custom_post_type');
    }

    public static function register_post_type(){
        register_post_type(self::POST_TYPE,
            array(
                'labels'      => array(
                    'name'          => __( 'Products', 'textdomain' ),
                    'singular_name' => __( 'Product', 'textdomain' ),
                ),
                'public'      => true,
                'has_archive' => true,
                'rewrite'     => array( 'slug' => 'products' ), // my custom slug
            )
        );
    }
}
