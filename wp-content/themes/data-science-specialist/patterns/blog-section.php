<?php
 /**
  * Title: Blog Section
  * Slug: data-science-specialist/blog-section
  */
?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('latest news','data-science-specialist'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"foreground"} -->
<h2 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);font-size:25px;font-style:normal;font-weight:600"><?php esc_html_e('Stay Update with artificial from','data-science-specialist'); ?><br><?php esc_html_e('latest &amp; popular News','data-science-specialist'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","className":"blog-sec-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center blog-sec-inner"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"blog-left"} -->
<div class="wp-block-column is-vertically-aligned-center blog-left" style="flex-basis:50%"><!-- wp:query {"queryId":16,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"blog-img-box"} -->
<div class="wp-block-column is-vertically-aligned-center blog-img-box" style="flex-basis:50%"><!-- wp:post-featured-image {"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"blog-text-box"} -->
<div class="wp-block-column is-vertically-aligned-center blog-text-box" style="flex-basis:50%"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-date {"format":" j M Y","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-title {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"},"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:read-more {"content":"read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"secondary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"blog-right"} -->
<div class="wp-block-column is-vertically-aligned-center blog-right" style="flex-basis:50%"><!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":90,"isUserOverlayColor":true,"minHeight":350,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgb(0,0,0) 84%)","style":{"border":{"radius":"20px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:20px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgb(0,0,0) 84%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px"}}} /-->

<!-- wp:post-date {"format":" j M Y","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-title {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"},"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:read-more {"content":"read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"primary"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"37px"} -->
<div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->