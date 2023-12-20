<?php
/**
 * Title: Blog: Single Column
 * Slug: minimalistix/single-blog-column
 * Categories: minimalistix
 * Description: All blog posts: Single column
 * Keywords: Single blog column
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":"800px"}} -->
<main class="wp-block-group"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"displayLayout":{"type":"list","columns":2},"align":"wide","layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"40px"},"margin":{"bottom":"17px"}},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;margin-bottom:17px;padding-top:0px;padding-bottom:40px"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","align":"wide"} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"20px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"29px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:29px;margin-bottom:60px"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","textColor":"base","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"style":{"typography":{"fontSize":"1.53rem"}}} /-->

<!-- wp:query-pagination-next {"style":{"typography":{"fontSize":"1.53rem"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->