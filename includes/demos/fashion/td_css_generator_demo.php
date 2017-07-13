<?php

function td_css_demo_gen() {
	$td_demo_custom_css = "
	<style>

		/* @theme_color */
		.td-fashion .td-post-category,
		.td-fashion .td_block_template_6 .td-related-title .td-cur-simple-item,
		.td-fashion .td-header-style-2 .sf-menu > .current-menu-item > a,
	    .td-fashion .td-header-style-2 .sf-menu > .current-menu-ancestor > a,
	    .td-fashion .td-header-style-2 .sf-menu > .current-category-ancestor > a,
	    .td-fashion .td-header-style-2 .sf-menu > li:hover > a,
	    .td-fashion .td-header-style-2 .sf-menu > .sfHover > a,
	    .td-fashion.single_template_rd_9 .td-post-header .td-post-author-name a,
	    .td-fashion.single_template_rd_4 .td-post-header .td-post-author-name a,
	    .td-fashion.single_template_rd_10 .td-post-header .td-post-author-name a,
	    .td-fashion.single_template_rd_13 .td-post-header .td-post-author-name a {
   		    color: @theme_color;
   		}

		/* @footer_bottom_hover_color */
		.td-fashion .td-subfooter-menu li.menu-item > a:hover,
		.td-fashion .td-subfooter-menu li.sfHover > a,
		.td-fashion .td-subfooter-menu li.current-menu-ancestor > a,
		.td-fashion .td-subfooter-menu li.current-category-ancestor > a,
		.td-fashion .td-subfooter-menu li.current-menu-item > a,
		.td-fashion .td-footer-outer-wrapper a:hover {
			color: @footer_bottom_hover_color;
		}

	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);

	$td_demo_css_compiler->load_setting('theme_color');
	$td_demo_css_compiler->load_setting('footer_bottom_hover_color');

	return $td_demo_css_compiler->compile_css();
}
