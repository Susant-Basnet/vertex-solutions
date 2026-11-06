<?php
/**
 * Title: Site header
 * Slug: vertex-solutions/header
 * Viewport Width: 1400
 * Inserter: no
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"white","className":"vertex-header vertex-gutter","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vertex-header vertex-gutter has-white-background-color has-background">
<!-- wp:group {"className":"vertex-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vertex-header__inner">
<!-- wp:site-title {"level":0,"className":"vertex-brand"} /-->
<!-- wp:navigation {"overlayMenu":"mobile","className":"vertex-primary-nav","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Home', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#services' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#about' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Projects', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#projects' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#contact' ) ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->
<!-- wp:buttons {"className":"vertex-header-cta"} -->
<div class="wp-block-buttons vertex-header-cta">
<!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php echo esc_html__( 'Get Started', 'vertex-solutions' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
