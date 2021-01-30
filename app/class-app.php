<?php

namespace STG;

class App {

    private function __construct() {
    }

    public static function init() {
        if ( is_admin() ) {
            return;
        }

        CPT::init();
    }
}
