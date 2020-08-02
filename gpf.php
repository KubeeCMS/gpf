<?php # -*- coding: utf-8 -*-
/**
 * Main plugin file.
 * allows you to more easily populate advanced attributes into the Google Merchant Centre feed!
 *
 * @package      kubeecms-gpf
 * @author       KubeeCMS
 * @copyright    Copyright (c) 2012-2020, KubeeCMS - KUBEE
 * @license      GPL-2.0-or-later
 * @link         https://github.com/KubeeCMS/gpf/
 * @link         https://github.com/KubeeCMS/
 *
 * @wordpress-plugin
 * Plugin Name:  Google Product Feed
 * Plugin URI:   https://github.com/KubeeCMS/gpf/
 * Description:  allows you to more easily populate advanced attributes into the Google Merchant Centre feed.
 * Version:      9.0.1
 * Author:       KubeeCMS - KUBEE
 * Author URI:   https://github.com/KubeeCMS/
 * License:      GPL-2.0-or-later
 * License URI:  https://opensource.org/licenses/GPL-2.0
 * Text Domain:  multisite-toolbar-additions
 * Domain Path:  /languages/
 * Woo: 18619:d55b4f852872025741312839f142447e
 * WC requires at least: 4.0
 * WC tested up to: 4.4
 * Requires WP:  5.5
 * Requires PHP: 7.3
 *
 * Copyright (c) 2012-2020 KubeeCMS - KUBEE
 *
 *     This file is part of Multisite Toolbar Additions,
 *     a plugin for WordPress.
 *
 *     Google Product Feed for KCMS is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 2 of the License, or (at your option)
 *     any later version.
 *
 *     Google Product Feed for KCMS is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 * 
 * @package kubeecms-gpf
 */

defined( 'ABSPATH' ) || exit;



require_once __DIR__ . '/vendor/autoload.php';

Roots\add_actions(['after_setup_theme', 'rest_api_init'], 'Roots\bootloader', 5);




/**
 * Plugin updates
 */
if ( ! function_exists( 'woothemes_queue_update' ) ) {
	require_once 'woo-includes/woo-functions.php';
}
woothemes_queue_update( plugin_basename( __FILE__ ), 'd55b4f852872025741312839f142447e', '18619' );

// The current DB schema version.
define( 'WOOCOMMERCE_GPF_DB_VERSION', 8 );

// The current version.
define( 'WOOCOMMERCE_GPF_VERSION', '9.0.1' );

$woocommerce_gpf_dirname = dirname( __FILE__ ) . '/';
require_once $woocommerce_gpf_dirname . 'vendor/woocommerce/action-scheduler/action-scheduler.php';
require_once $woocommerce_gpf_dirname . 'vendor/autoload.php';
require_once $woocommerce_gpf_dirname . 'woocommerce-product-feeds-install.php';
require_once $woocommerce_gpf_dirname . 'src/gpf/woocommerce-gpf-template-functions.php';
require_once $woocommerce_gpf_dirname . 'woocommerce-product-feeds-bootstrap.php';

register_activation_hook( __FILE__, 'woocommerce_gpf_install' );

/**
 * Run the plugin.
 */
global $woocommerce_product_feeds_main;
$woocommerce_product_feeds_main = $woocommerce_gpf_di['WoocommerceProductFeedsMain'];
$woocommerce_product_feeds_main->run();
