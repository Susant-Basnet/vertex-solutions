<?php
/**
 * Title: Post grid
 * Slug: vertex-solutions/post-grid
 * Block Types: core/query
 * Viewport Width: 1400
 * Inserter: no
 *
 * @package VERTEX_Solutions
 */
?>
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"backgroundColor":"white","className":"vertex-card vertex-post-card"} -->
<div class="wp-block-group vertex-card vertex-post-card has-white-background-color has-background">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
<!-- wp:post-terms {"term":"category","className":"is-style-eyebrow"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- wp:post-excerpt {"excerptLength":24,"fontSize":"small"} /-->
<!-- wp:post-date {"fontSize":"x-small"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing matched your request. Please try different keywords.', 'vertex-solutions' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'vertex-solutions' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search…', 'vertex-solutions' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'vertex-solutions' ); ?>","className":"vertex-search"} /-->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
