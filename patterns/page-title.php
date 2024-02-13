<?php
/**
 * Title: Page Title
 * Slug: landscaper/page-title
 * Categories: landscaper, page-title
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.jpg'); ?>","id":6,"dimRatio":50,"minHeight":400,"style":{"spacing":{"padding":{"top":"12em"}}}} -->
<div class="wp-block-cover" style="padding-top:12em;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"letterSpacing":"1px","fontSize":"45px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->