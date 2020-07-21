<?php

/**
 * Versandgigant WP Signed S/MIME Mails
 *
 * Versandgigant is using this WordPress plugin to sign outgoing emails.
 * No matter if you're trying to sign WordPress or WooCommerce confirmation
 * emails, all will get signed with the central certificate.
 * Small, elegant and quick. Get that ''verified'' blue star in your customer's inbox.
 *
 * * Plugin Name: Versandgigant WP Signed S/MIME Mails
 * * Plugin URI: https://github.com/p-w/versandgigant-wp-signed-smime-mails
 * * Description: Fast and reliable way to configure a WordPress or WooCommerce website to send S/MIME signed mails. Easy, secure, fast, performing and encryption ready.
 * * Version: 1.0
 * * License: GPL-3.0
 * * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * * Text Domain: vg-wp-simple-smtp-emails
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	// Disallow direct HTTP access.
	exit;
} 


/**
 * Base class for WordPress to register and initialize this plugin.
 */
class VG_WP_Simple_SMIME_Emails {
	/**
	 * Entry point for the WordPress framework into plugin code.
	 *
	 * This is the method called when WordPress loads the plugin file.
	 * It is responsible for "registering" the plugin's main functions
	 * with the {@see https://codex.wordpress.org/Plugin_API WordPress Plugin API}.
	 *
	 * @uses add_action()
	 *
	 * @return void
	 */
	public static function register () {
		add_action( 'phpmailer_init', array( __CLASS__, 'phpmailer_init' ) );
	}

	/**
	 * Overriding the PHPMailer default configuration with mail account
	 * settings defined in wp-config.php
	 *
	 * @return void
	 */
	public static function phpmailer_init ( $phpmailer ) {

	}
}

VG_WP_Simple_SMIME_Emails::register();
