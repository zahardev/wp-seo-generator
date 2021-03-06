<?php
/*
 Plugin Name: {STG}
 Author: Author Name
 Author URI:  https://github.com/
 Description: This plugin does something amazing
 License:     GPL2

{STG} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{STG} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Stripe Payments Custom Fields. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.

*/

use STG\App;

if ( ! function_exists( 'add_action' ) ) {
    exit;
}

//todo: change STG to your unique plugin prefix in all the plugin files
//todo: change {STG} to your plugin name in all the plugin files
define( 'STG_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'STG_PLUGIN_BASENAME', plugin_basename(__FILE__));
define( 'STG_PLUGIN_URL', plugins_url('', __FILE__));

require_once 'wp-autoloader.php';

App::init();
