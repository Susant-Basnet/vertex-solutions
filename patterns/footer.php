<?php
/**
 * Title: Site footer
 * Slug: vertex-solutions/footer
 * Viewport Width: 1400
 * Inserter: no
 *
 * @package VERTEX_Solutions
 */
$vertex_solutions_privacy = get_privacy_policy_url();
?>
<!-- wp:group {"align":"full","backgroundColor":"ink","textColor":"white","className":"vertex-footer vertex-gutter vertex-on-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vertex-footer vertex-gutter vertex-on-dark has-white-color has-ink-background-color has-text-color has-background">
<!-- wp:group {"className":"vertex-grid vertex-grid--footer"} -->
<div class="wp-block-group vertex-grid vertex-grid--footer">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:site-title {"level":0,"className":"vertex-brand vertex-brand--small"} /-->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-footer__text"} -->
<p class="vertex-footer__text has-x-small-font-size"><?php echo esc_html__( 'Flat, minimalist business consulting and enterprise architecture solutions engineered for speed, stability, and scale.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","className":"vertex-footer__title vertex-footer__title--primary"} -->
<h4 class="wp-block-heading vertex-footer__title vertex-footer__title--primary has-x-small-font-size"><?php echo esc_html__( 'Company', 'vertex-solutions' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"<?php echo esc_attr__( 'Footer navigation', 'vertex-solutions' ); ?>","className":"vertex-footer-nav","layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Home', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#services' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About Us', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#about' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Projects', 'vertex-solutions' ); ?>","type":"custom","url":"<?php echo esc_url( home_url( '/#projects' ) ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","className":"vertex-footer__title vertex-footer__title--teal"} -->
<h4 class="wp-block-heading vertex-footer__title vertex-footer__title--teal has-x-small-font-size"><?php echo esc_html__( 'Connect', 'vertex-solutions' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:social-links {"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /--><!-- wp:social-link {"url":"#","service":"x"} /--><!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"fontSize":"x-small","className":"vertex-footer__title vertex-footer__title--amber"} -->
<h4 class="wp-block-heading vertex-footer__title vertex-footer__title--amber has-x-small-font-size"><?php echo esc_html__( 'Subscribe to Flat Insights', 'vertex-solutions' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-footer__text"} -->
<p class="vertex-footer__text has-x-small-font-size"><?php echo esc_html__( 'Practical notes on cloud, strategy and delivery. Get in touch and we will add you to the list.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"amber","textColor":"navy"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-navy-color has-amber-background-color has-text-color has-background wp-element-button" href="#contact"><?php echo esc_html__( 'Get in touch', 'vertex-solutions' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"vertex-footer__bottom","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vertex-footer__bottom">
<!-- wp:paragraph {"className":"vertex-footer__legal-text","fontSize":"x-small"} -->
<p class="vertex-footer__legal-text has-x-small-font-size"><?php
/* translators: 1: year, 2: site name. */
printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'vertex-solutions' ), esc_html( wp_date( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) );
?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"vertex-footer__legal-links","fontSize":"x-small"} -->
<p class="vertex-footer__legal-links has-x-small-font-size"><a href="<?php echo esc_url( $vertex_solutions_privacy ? $vertex_solutions_privacy : '#' ); ?>"><?php echo esc_html__( 'Privacy Policy', 'vertex-solutions' ); ?></a> <a href="#"><?php echo esc_html__( 'Terms of Service', 'vertex-solutions' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
