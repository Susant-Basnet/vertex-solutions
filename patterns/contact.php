<?php
/**
 * Title: Contact section (Contact Form 7)
 * Slug: vertex-solutions/contact
 * Categories: vertex-solutions-sections
 * Keywords: contact, form, cf7, quote
 * Viewport Width: 1400
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:group {"align":"full","anchor":"contact","backgroundColor":"navy","textColor":"white","className":"vertex-section vertex-gutter vertex-on-dark","layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group alignfull vertex-section vertex-gutter vertex-on-dark has-white-color has-navy-background-color has-text-color has-background">
<!-- wp:group {"className":"vertex-grid vertex-grid--split"} -->
<div class="wp-block-group vertex-grid vertex-grid--split">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"backgroundColor":"amber","textColor":"navy","className":"is-style-badge"} -->
<p class="is-style-badge has-navy-color has-amber-background-color has-text-color has-background"><?php echo esc_html__( 'Connect With Us', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Ready to Accelerate Your Strategy?', 'vertex-solutions' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"slate-300","fontSize":"small"} -->
<p class="has-slate-300-color has-text-color has-small-font-size"><?php echo esc_html__( 'Fill out the form or get in touch directly with our team. We respond within 2 business hours.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"vertex-info","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group vertex-info">
<!-- wp:group {"backgroundColor":"ink","textColor":"primary","className":"vertex-icon-box"} -->
<div class="wp-block-group vertex-icon-box has-primary-color has-ink-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-info__label"} -->
<p class="vertex-info__label has-x-small-font-size"><?php echo esc_html__( 'Headquarters', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","className":"vertex-info__value"} -->
<p class="vertex-info__value has-small-font-size"><?php echo esc_html__( '100 Tech Plaza, San Francisco, CA', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"vertex-info","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group vertex-info">
<!-- wp:group {"backgroundColor":"ink","textColor":"teal","className":"vertex-icon-box"} -->
<div class="wp-block-group vertex-icon-box has-teal-color has-ink-background-color has-text-color has-background">
<!-- wp:html -->
<svg class="vertex-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"x-small","className":"vertex-info__label"} -->
<p class="vertex-info__label has-x-small-font-size"><?php echo esc_html__( 'Email Us', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","className":"vertex-info__value"} -->
<p class="vertex-info__value has-small-font-size"><a href="mailto:contact@vertexsolutions.com">contact@vertexsolutions.com</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"backgroundColor":"white","textColor":"navy","className":"vertex-form-card"} -->
<div class="wp-block-group vertex-form-card has-navy-color has-white-background-color has-text-color has-background">
<?php if ( shortcode_exists( 'contact-form-7' ) ) : ?>
<!-- wp:html -->
<?php echo do_shortcode( '[contact-form-7 title="Contact form 1"]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Plugin output is already escaped. ?>
<!-- /wp:html -->
<?php elseif ( current_user_can( 'install_plugins' ) ) : ?>
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Install and activate the Contact Form 7 plugin, then create a form titled "Contact form 1" to show your contact form here.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<?php else : ?>
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Please email us to start a conversation.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
