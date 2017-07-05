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
		.td-pressroom .td-pressroom-dark-block .td_module_wrap:hover .entry-title a {
		  color: @theme_color;
		}
		.td-pressroom .td_ajax_load_more,
		.td-pressroom .td-scroll-up {
		  background-color: @theme_color;
		}
		
	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);
	$td_demo_css_compiler->load_setting('theme_color');

	return $td_demo_css_compiler->compile_css();
}
