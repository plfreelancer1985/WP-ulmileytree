<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-LAYOUT-PORTFOLIO.PHP
// -----------------------------------------------------------------------------
// Portfolio page output for Icon.
// =============================================================================

?>

<?php get_header(); ?>

<div id="x-section-1" class="x-section center-text dark-section bg-pattern parallax" style="margin: 0px; padding: 50px 0px; background-image: url('http://sanj.novaproduction.net/tigon/wp-content/uploads/2016/01/home-renovation-photos.jpg'); background-attachment: scroll; background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;pattern&quot;,&quot;parallax&quot;:true}"><div class="x-container max width" style="margin: 0px auto 0px auto; padding: 0px 0px 0px 0px; "><div class="x-column x-sm x-1-1" style="padding: 0px 0px 0px 0px; "><h1 class="h-custom-headline man h2"><span>Home Renovation Photos</span></h1><h2 class="h-feature-headline man h5" style="padding-top:20px;"><span><i class="x-icon-camera-o" data-x-icon=""></i>Gallery, Portfolio, Before and After Projects</span></h2></div></div></div>

  <div id="section-gallery" class="x-section" role="main">
    <div class="x-container max width">

      <?php x_portfolio_filters(); ?>
      <?php x_get_view( 'global', '_portfolio' ); ?>

    </div>
  </div>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>
