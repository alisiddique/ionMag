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
		.td-ionmag-blog-fitness .td_block_big_grid_rd_bg_fl_5 .td-big-grid-post .td-meta-info-container:before,
		.td-ionmag-blog-fitness .td_module_rd_8 .td-module-meta-holder:before,
		.td-ionmag-blog-fitness .td_wrapper_video_playlist .td_video_controls_playlist_wrapper {
			background-color: @theme_color;
		}

		.td-ionmag-blog-fitness .td_wrapper_video_playlist .td_video_currently_playing:after {
			border-left-color: @theme_color !important;
		}

	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);
	$td_demo_css_compiler->load_setting('theme_color');

	return $td_demo_css_compiler->compile_css();
}
