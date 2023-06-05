<?php

// =============================================================================
// VIEWS/GLOBAL/_NAVBAR.PHP
// -----------------------------------------------------------------------------
// Outputs the navbar.
// =============================================================================

$navbar_position = x_get_navbar_positioning();
$logo_nav_layout = x_get_logo_navigation_layout();
$is_one_page_nav = x_is_one_page_navigation();

?>

<?php if ( ( $navbar_position == 'static-top' || $navbar_position == 'fixed-top' || $is_one_page_nav ) && $logo_nav_layout == 'stacked' ) : ?>

  <div class="x-logobar">
    <div class="x-logobar-inner">
      <div class="x-container max width">
        <?php x_get_view( 'global', '_brand' ); ?>
      </div>
    </div>
  </div>

  <div class="x-navbar-wrap navbarx1">
    <div class="<?php x_navbar_class(); ?>">
      <div class="x-navbar-inner">
        <div class="x-container max width">
          <?php x_get_view( 'global', '_nav', 'primary' ); ?>
        </div>
      </div>
    </div>
  </div>

<?php else : ?>

  <div class="x-navbar-wrap navbarx2">
    <div class="<?php x_navbar_class(); ?>">
      <div class="x-navbar-inner">
        <div class="x-container max width">
          <div class="navbar-inner-topbar-x">
						<a href="https://www.facebook.com/almileytree/"><img src="https://www.almileytree.com/wp-content/uploads/2019/03/facebook-icon.png"></a>
						<a href="https://twitter.com/almileytree?lang=en"><img src="https://www.almileytree.com/wp-content/uploads/2019/03/twitter-icon.png"></a>
						<div class="navbar-inner-topbar-z">
							   <img src="https://www.almileytree.com/wp-content/uploads/2019/03/phone-icon.png" style="">
							<a class="navbar-inner-phone-z" href="tel:4167493723">416-749-3723</a>
	            <a class="navbar-inner-estimate-z" href="https://www.almileytree.com/contact-us/">FREE ESTIMATE</a>
						</div>
	      </div>
          <?php x_get_view( 'global', '_brand' ); ?>
          <?php x_get_view( 'global', '_nav', 'primary' ); ?>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
