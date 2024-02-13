<?php
/**
 * Title: Banner
 * Slug: landscaper/banner
 * Categories: landscaper, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":60,"overlayColor":"black","focalPoint":{"x":0.5,"y":0.5},"minHeight":900,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:900px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"45px","letterSpacing":"1px"}},"textColor":"primary","fontFamily":"stalemate"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-stalemate-font-family" style="font-size:45px;font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('Welcome To Landscaper','landscaper'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-text-align-center has-banner-title-font-size" style="margin-top:30px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e('We Are Allround Certified & Insured landscapers','landscaper'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"backgroundColor":"white","textColor":"secondary","style":{"border":{"radius":"5px"},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-fill","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-secondary-color has-white-background-color has-text-color has-background wp-element-button" style="border-radius:5px"><?php esc_html_e('How It Works','landscaper'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->