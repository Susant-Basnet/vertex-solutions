<?php
/**
 * Title: About with tabs
 * Slug: vertex-solutions/about-tabs
 * Categories: vertex-solutions-sections
 * Keywords: about, tabs, story, company
 * Viewport Width: 1400
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:group {"align":"full","anchor":"about","backgroundColor":"subtle","className":"vertex-section vertex-section--band vertex-gutter","layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull vertex-section vertex-section--band vertex-gutter has-subtle-background-color has-background">
<!-- wp:group {"className":"vertex-grid vertex-grid--split"} -->
<div class="wp-block-group vertex-grid vertex-grid--split">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:paragraph {"backgroundColor":"navy","textColor":"white","className":"is-style-badge"} -->
<p class="is-style-badge has-white-color has-navy-background-color has-text-color has-background"><?php echo esc_html__( 'About VERTEX', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Engineered for Uncompromising Efficiency', 'vertex-solutions' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Founded in 2018, VERTEX Solutions eliminated the fluff from traditional corporate IT consulting. We adhere to clear, flat principles: clean architecture, radical transparency, and measurable results.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Our team consists of senior engineers, cloud architects, and industry strategists dedicated to delivering resilient infrastructure without unnecessary complexity.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"backgroundColor":"white","className":"vertex-card vertex-tabs"} -->
<div class="wp-block-group vertex-card vertex-tabs has-white-background-color has-background">
<!-- wp:html -->
<div class="vertex-tablist" role="tablist" aria-label="<?php echo esc_attr__( 'VERTEX highlights', 'vertex-solutions' ); ?>"><button type="button" role="tab" class="vertex-tab is-active" id="vertex-tab-innovation" aria-controls="vertex-panel-innovation" aria-selected="true"><?php echo esc_html__( 'Innovation', 'vertex-solutions' ); ?></button><button type="button" role="tab" class="vertex-tab" id="vertex-tab-security" aria-controls="vertex-panel-security" aria-selected="false"><?php echo esc_html__( 'Security', 'vertex-solutions' ); ?></button><button type="button" role="tab" class="vertex-tab" id="vertex-tab-scalability" aria-controls="vertex-panel-scalability" aria-selected="false"><?php echo esc_html__( 'Scalability', 'vertex-solutions' ); ?></button></div>
<!-- /wp:html -->
<!-- wp:group {"anchor":"vertex-panel-innovation","className":"vertex-tab-panel"} -->
<div id="vertex-panel-innovation" class="wp-block-group vertex-tab-panel">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Continuous Innovation Pipelines', 'vertex-solutions' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'We integrate modern CI/CD automation, AI-driven insights, and state-of-the-art tech stacks to ensure your enterprise continuously outpaces competitors.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"vertex-checklist vertex-checklist--primary"} -->
<ul class="wp-block-list vertex-checklist vertex-checklist--primary"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Automated Software Delivery Workflows', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'Cutting-Edge Machine Learning Integration', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'Modern Microservices Frameworks', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"vertex-panel-security","className":"vertex-tab-panel"} -->
<div id="vertex-panel-security" class="wp-block-group vertex-tab-panel">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Zero-Trust Security Architecture', 'vertex-solutions' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Security isn\'t an afterthought—it\'s woven into every line of code and infrastructure deployment with robust compliance monitoring.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"vertex-checklist vertex-checklist--teal"} -->
<ul class="wp-block-list vertex-checklist vertex-checklist--teal"><!-- wp:list-item -->
<li><?php echo esc_html__( 'End-to-End Military Grade Encryption', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'Real-time Incident & Vulnerability Scans', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'SOC2 & ISO27001 Ready Standards', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"anchor":"vertex-panel-scalability","className":"vertex-tab-panel"} -->
<div id="vertex-panel-scalability" class="wp-block-group vertex-tab-panel">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Elastic Architecture for Uncapped Growth', 'vertex-solutions' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Experience system responsiveness that dynamically scales with traffic spikes without manual intervention or costly overheads.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"vertex-checklist vertex-checklist--amber"} -->
<ul class="wp-block-list vertex-checklist vertex-checklist--amber"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Dynamic Multi-Region Auto-Scaling', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'Optimized Serverless Computing Options', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html__( 'Low-Latency Global Content Delivery', 'vertex-solutions' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
