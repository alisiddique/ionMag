<?php
/**
 * Created by ra.
 * Date: 9/2/2015
 * CSS generator for this specific demo
 */


function td_css_demo_gen() {
	$td_demo_custom_css = "
	<style>

	/* @theme_color */
	.td-ionmag-blog-baby .td_module_rd_11 .td-post-category,
	.td-ionmag-blog-baby .td_module_1 .td-post-category-wrap a,
	.td-ionmag-blog-baby .td_module_rd_6 .td-post-category-wrap a {
		color: @theme_color;
	}

	.td-ionmag-blog-baby .td_block_big_grid_1 .td-meta-info-container .td-post-category {
		background-color: @theme_color;
	}
		
	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);
	$td_demo_css_compiler->load_setting('theme_color');

	return $td_demo_css_compiler->compile_css();
}
