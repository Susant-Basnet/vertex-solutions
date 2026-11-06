<?php
/**
 * Title: Hero with stat tiles
 * Slug: vertex-solutions/hero
 * Categories: vertex-solutions-sections
 * Keywords: hero, banner, landing, stats
 * Viewport Width: 1400
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:group {"align":"full","anchor":"home","className":"vertex-section vertex-section--hero vertex-gutter","layout":{"type":"constrained"}} -->
<div id="home" class="wp-block-group alignfull vertex-section vertex-section--hero vertex-gutter">
<!-- wp:group {"className":"vertex-grid vertex-grid--hero"} -->
<div class="wp-block-group vertex-grid vertex-grid--hero">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"backgroundColor":"teal","textColor":"white","className":"is-style-badge"} -->
<p class="is-style-badge has-white-color has-teal-background-color has-text-color has-background"><?php echo esc_html__( 'Empowering Enterprise Scale', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Empowering Business Growth through', 'vertex-solutions' ); ?> <span class="vertex-highlight"><?php echo esc_html__( 'Modern Tech', 'vertex-solutions' ); ?></span> <?php echo esc_html__( '& Strategy.', 'vertex-solutions' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"lead","className":"vertex-lead"} -->
<p class="vertex-lead has-muted-color has-text-color has-lead-font-size"><?php echo esc_html__( 'VERTEX Solutions delivers flat-out efficiency. We architect scalable cloud infrastructure, optimize digital operations, and equip forward-thinking companies with actionable strategic insights.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#services"><?php echo esc_html__( 'Explore Services', 'vertex-solutions' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"navy","textColor":"white"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-navy-background-color has-text-color has-background wp-element-button" href="#contact"><?php echo esc_html__( 'Schedule Demo', 'vertex-solutions' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"vertex-hero__visual"} -->
<div class="wp-block-group vertex-hero__visual">
<!-- wp:group {"className":"vertex-stat-grid"} -->
<div class="wp-block-group vertex-stat-grid">
<!-- wp:group {"backgroundColor":"primary","textColor":"white","className":"vertex-stat-tile"} -->
<div class="wp-block-group vertex-stat-tile has-white-color has-primary-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"fontSize":"x-large","className":"vertex-stat__value"} -->
<p class="vertex-stat__value has-x-large-font-size"><?php echo esc_html__( '+148%', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-stat__label"} -->
<p class="vertex-stat__label has-x-small-font-size"><?php echo esc_html__( 'Growth Metric', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"backgroundColor":"teal","textColor":"white","className":"vertex-stat-tile"} -->
<div class="wp-block-group vertex-stat-tile has-white-color has-teal-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"fontSize":"x-large","className":"vertex-stat__value"} -->
<p class="vertex-stat__value has-x-large-font-size"><?php echo esc_html__( '100%', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-stat__label"} -->
<p class="vertex-stat__label has-x-small-font-size"><?php echo esc_html__( 'Cloud Native', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"backgroundColor":"amber","textColor":"navy","className":"vertex-stat-tile"} -->
<div class="wp-block-group vertex-stat-tile has-navy-color has-amber-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"fontSize":"x-large","className":"vertex-stat__value"} -->
<p class="vertex-stat__value has-x-large-font-size"><?php echo esc_html__( 'Zero', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-stat__label"} -->
<p class="vertex-stat__label has-x-small-font-size"><?php echo esc_html__( 'Downtime', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"backgroundColor":"navy","textColor":"white","className":"vertex-stat-tile"} -->
<div class="wp-block-group vertex-stat-tile has-white-color has-navy-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M13 2 3 14h9l-1 8 10-12h-9z"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"fontSize":"x-large","className":"vertex-stat__value"} -->
<p class="vertex-stat__value has-x-large-font-size"><?php echo esc_html__( '2.4x', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-stat__label"} -->
<p class="vertex-stat__label has-x-small-font-size"><?php echo esc_html__( 'Speed Ratio', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
