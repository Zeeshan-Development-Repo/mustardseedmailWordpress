<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */?>
<div class="woocommerce-myaccount-page">

	<?php do_action('woocommerce_account_navigation'); ?>
	<div class="woocommerce-MyAccount-content">
		<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action('woocommerce_account_content');
		?>
	</div>
</div>
<?php
if (function_exists('is_user_logged_in') && function_exists('is_account_page') && function_exists('is_wc_endpoint_url')) {
	if (is_user_logged_in() && is_account_page() && !is_wc_endpoint_url()) {
		?>
		<div class="mini-shop">
			<div class="placeholder"></div>
			<?php
			if (function_exists('post_card_exchange')) {
				post_card_exchange("my_account_exchange");
			} else {
				echo 'Error: post_card_exchange function is not defined.';
			}
			?>
		</div>
		<?php
	}
} else { echo ''; }
?>