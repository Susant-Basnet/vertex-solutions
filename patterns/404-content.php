<?php
/**
 * Title: 404 content
 * Slug: vertex-solutions/404-content
 * Viewport Width: 1400
 * Inserter: no
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:group {"className":"vertex-404","layout":{"type":"constrained","contentSize":"40rem"}} -->
<div class="wp-block-group vertex-404">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( '404', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Page not found', 'vertex-solutions' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color"><?php echo esc_html__( 'The page you are looking for may have been moved or no longer exists. Try a search or head back home.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'vertex-solutions' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search…', 'vertex-solutions' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'vertex-solutions' ); ?>","className":"vertex-search"} /-->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back to Home', 'vertex-solutions' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
