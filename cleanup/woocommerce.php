<?php

// Subpackage namespace
namespace LittleBizzy\DashboardCleanup\Cleanup;

// Aliased namespaces
use \LittleBizzy\DashboardCleanup\Helpers;

/**
 * WooCommerce class
 *
 * @package Dashboard Cleanup
 * @subpackage Cleanup
 */
final class Woocommerce extends Helpers\Singleton {



	/**
	 * Removes the 'Connect your store' WC admin notice
	 */
	public function connectStore($default) {

		// Last minute check
		if (!$this->plugin->enabled('DASHBOARD_CLEANUP_WOOCOMMERCE_CONNECT_STORE')) {
			return $default;
		}

		// Done
		return true;
	}



	/**
	 * Removes the 'Products Block' WC admin notice
	 */
	public function productsBlock($default, $notice) {

		// Check proper notice
		if ('wootenberg' != $notice) {
			return $notice;
		}

		// Last minute check
		if (!$this->plugin->enabled('DASHBOARD_CLEANUP_WOOCOMMERCE_PRODUCTS_BLOCK')) {
			return $notice;
		}

		// Done
		return false;
	}



	/**
	 * Removes footer message `If you like WooCommerce please leave us a...`
	 */
	public function footerText($default) {

		// Last minute check
		if (!$this->plugin->enabled('DASHBOARD_CLEANUP_WOOCOMMERCE_FOOTER_TEXT')) {
			return $default;
		}

		// Done
		return false;
	}



}