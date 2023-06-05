<?php
/**
 * Upgrade highlight modal.
 *
 * @since 2.6.0
 * @package Hummingbird
 */

use Hummingbird\Core\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="sui-modal sui-modal-md">
	<div
			role="dialog"
			id="upgrade-summary-modal"
			class="sui-modal-content"
			aria-modal="true"
			aria-labelledby="upgrade-summary-modal-title"
	>
		<div class="sui-box">
			<div class="sui-box-header sui-flatten sui-content-center sui-spacing-top--60">
				<?php if ( ! apply_filters( 'wpmudev_branding_hide_branding', false ) ) : ?>
					<figure class="sui-box-banner" aria-hidden="true">
						<img src="<?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg.png' ); ?>" alt=""
							srcset="<?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg.png' ); ?> 1x, <?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg@2x.png' ); ?> 2x">
					</figure>
				<?php endif; ?>

				<button class="sui-button-icon sui-button-float--right" onclick="window.WPHB_Admin.dashboard.hideUpgradeSummary()">
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_attr_e( 'Close this modal', 'wphb' ); ?></span>
				</button>

				<h3 id="upgrade-summary-modal-title" class="sui-box-title sui-lg" style="white-space: inherit">
					<?php esc_html_e( 'New: Asset Optimization Safe Mode!', 'wphb' ); ?>
				</h3>
			</div>

			<div class="sui-box-body sui-spacing-top--20 sui-spacing-bottom--20">
				<div class="wphb-upgrade-feature">
					<p class="wphb-upgrade-item-desc" style="text-align: center">
						<?php esc_html_e( "With Hummingbird's new Safe Mode, you can test different asset optimization settings in a safe environment without affecting your website visitors' experience.", 'wphb' ); ?>
					</p>
				</div>
				<div class="wphb-upgrade-feature">
					<p class="wphb-upgrade-item-desc" style="text-align: center;margin-top: 10px">
						<?php
						$message_args = array(
							esc_html__( 'To enable this feature, go to %1$sAsset Optimization > Manual Asset Optimization%2$s.', 'wphb' ),
						);
						if ( is_multisite() ) {
							$message_args[] = '<strong>';
							$message_args[] = '</strong>';
						} else {
							$message_args[] = '<a href="' . esc_url( Utils::get_admin_menu_url( 'minification' ) ) . '#wphb-optimization-type-selector" onclick="window.WPHB_Admin.dashboard.hideUpgradeSummary()">';
							$message_args[] = '</a>';
						}
						call_user_func_array( 'printf', $message_args );
						?>
					</p>
				</div>
			</div>

			<div class="sui-box-footer sui-flatten sui-content-center">
				<button role="button" class="sui-button" onclick="window.WPHB_Admin.dashboard.hideUpgradeSummary()">
					<?php esc_html_e( 'Got it', 'wphb' ); ?>
				</button>
			</div>
		</div>
	</div>
</div>
