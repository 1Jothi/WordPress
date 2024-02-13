<?php
/**
 * Title: Latest News
 * Slug: landscaper/latest-news
 * Categories: landscaper, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","className":"section_head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide section_head"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"40px","letterSpacing":"1px"}},"textColor":"primary","className":"section_sub_title","fontFamily":"stalemate"} -->
<h4 class="wp-block-heading has-text-align-center section_sub_title has-primary-color has-text-color has-stalemate-font-family" style="font-size:40px;font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e('News Updates & Tips','landscaper'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"10px"}}},"className":"section_title","fontSize":"big"} -->
<h2 class="wp-block-heading has-text-align-center section_title has-big-font-size" style="margin-top:10px"><?php esc_html_e('Read Our Insights News Update & Articles','landscaper'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"className":"news-thumb-wrap"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"regular"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /-->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|primary","width":"1px"},"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"top":"7px","bottom":"7px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-top:7px;padding-bottom:7px"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','landscaper'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->