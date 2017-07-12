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
		.td-ionmag-photo .td-photo-dark-row .td_module_wrap:hover .td-module-title a {
		color: @theme_color;
		}	
		.td-ionmag-photo .td-main-content-wrap .td_block_template_12 .td-next-prev-wrap a:hover,
		.td-ionmag-photo .td-post-category {
		background-color: @theme_color;
		}
		.td-ionmag-photo .td-main-content-wrap .td_block_template_12 .td-next-prev-wrap a:hover {
		border-color: @theme_color;
		}
		
	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);
	$td_demo_css_compiler->load_setting('theme_color');

	return $td_demo_css_compiler->compile_css();
}

