<?php

/* ---- backgrounds ---- */
// main site bg
td_demo_misc::update_background('');
// mobile background
td_demo_misc::update_background_mobile('td_pic_2');
// login background
td_demo_misc::update_background_login('td_pic_2');


/* ---- logos ---- */
//header & mobile
td_demo_misc::update_logo(array(
    'normal' => 'td_logo_header',
    'retina' => 'td_logo_header_retina',
    'mobile' => 'td_logo_footer'
));
//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_logo_footer'
));


/* ---- footer text ---- */
td_demo_misc::update_footer_text('Jessica is a passionate blogger, diving into different subjects like fashion, trends, styles and news and more. Discover the great insight of a true quality blogger!');


/* ---- socials ---- */
td_demo_misc::add_social_buttons(array(
    'facebook' => 'https://www.facebook.com/WPionReview/',
    'twitter' => 'https://twitter.com/wpionreview/',
    'googleplus' => 'https://plus.google.com/+WpionReview',
    'instagram' => 'https://www.instagram.com/wpionreview/',
    'youtube' => 'https://www.youtube.com/channel/UC9-vNag9GLrtAjA_f9FdN8g'
));


/* ---- ads ---- */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('sidebar', 'td_rec_sidebar');


/* ---- sidebars  ---- */
//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');

//remove footer widgets > remove existing widgets from footer widgets areas
td_demo_widgets::remove_widgets_from_sidebar('footer-1');
td_demo_widgets::remove_widgets_from_sidebar('footer-2');
td_demo_widgets::remove_widgets_from_sidebar('footer-3');

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_image_box_widget',
    array (
        'custom_title'      => "Don't miss",
        'height'            => 120,
        'gap'               => 20,
        'display'           => "vertical",
        'style'             => "style-2",
        'image_item0'       => "",
        'image_title_item0' => "MAKEUP",
        'image_item1'       => "",
        'image_title_item1' => "TRENDS",
        'image_item2'       => "",
        'image_title_item2' => "HOW TO'S"
    )
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_3_widget',
    array (
        'custom_title' => 'Most popular',
        'sort' => 'random_posts',
        'limit' => '3'
    )
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_6_widget',
    array (
        'custom_title' => 'Recent posts'
    )
);


/* ---- categories ---- */
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Fashion Today',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Fashion Shows',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Lingerie Fashion',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Milano Trends',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Red Carpet',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Victoria�s Secret',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Cosmopolitan',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Celebrity Style',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_category_td_grid_style' => ''
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Beauty',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_category_td_grid_style' => ''
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Street',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_category_td_grid_style' => ''
));


/* ---- add pages ---- */
$td_about_page = td_demo_content::add_page(array(
    'title' => 'About me',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/about.txt',
    'template' => 'page.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => '',
    'homepage' => false
));
$td_contact_page = td_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/contact.txt',
    'template' => 'page.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => '',
    'homepage' => false
));
$td_homepage_page = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/homepage.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => 'td_module_rd_6',
    'sidebar_position' => '',
    'homepage' => true
));


/* ---- top menu ---- */
$td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', 'top-menu');
td_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'page_id' => $td_about_page,
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Blog',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'page_id' => $td_contact_page,
    'parent_id' => ''
));


/* ---- footer menu ---- */
$td_demo_footer_menu = td_demo_menus::create_menu('td-demo-footer-menu', 'footer-menu');
td_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $td_demo_footer_menu,
    'page_id' => $td_about_page,
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Blog',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_footer_menu,
    'page_id' => $td_contact_page,
    'parent_id' => ''
));


/* ---- main menu ---- */
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');
td_demo_menus::add_page(array(
    'title' => '<i class="icon-fashion-home"></i>Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_page,
    'parent_id' => ''
));
td_demo_menus::add_mega_menu(array(
    'title' => '<i class="icon-fashion-fashion_today"></i>Fashion Today',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));
td_demo_menus::add_mega_menu(array(
	'title' => '<i class="icon-fashion-cosmopolitan"></i>Cosmopolitan',
	'add_to_menu_id' => $td_demo_header_menu_id,
	'category_id' => $demo_cat_7_id
));
td_demo_menus::add_mega_menu(array(
    'title' => '<i class="icon-fashion-celebrity_style"></i>Celebrity Style',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));
td_demo_menus::add_mega_menu(array(
    'title' => '<i class="icon-fashion-beauty"></i>Beauty',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_mega_menu(array(
    'title' => '<i class="icon-fashion-street"></i>Street',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));

/*  ---- posts ---- */
/* -------------- posts in multiple categories ----------------- */
td_demo_content::add_post(array(
    'title' => 'The True Story About How Fashion Trends Are Born',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => '6 Perfect Valentine�s Day Outfits For Every Occasion',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => 'The 10 Runway Trends You�ll Be Wearing This Year',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => 'Let�s Remember The Best Ever Oscars Dresses',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => 'Celebs Redefine Chic Front Row at the Paris Fashion Week Shows',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => 'Celebrity Style: Who Made Our Best-Dressed Top',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => 'Street Style Babes Who Will Inspire Your Office Beauty Look',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => 'Your A-to-Z guide to the must have this season',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => 'Wedding Guest Dresses For Every Shape, Style And Budget',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Anthony Vaccarello and Lancome are Collaborating on a Makeup Collection',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => '15 Fascinating Facts You Never Knew About Zara',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => 'Vintage Fashion: 3 Modern Ways To Shop The Decades',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => 'Local Designers Impress at Fashion Palette�s Summer Show',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_15'
));
td_demo_content::add_post(array(
    'title' => 'How To Turn Old Jeans In To Cute Cut-Off Shorts',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_13'
));
td_demo_content::add_post(array(
    'title' => 'Now This Is How We Expected Rihanna to Wear Dior',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_16'
));
td_demo_content::add_post(array(
    'title' => 'Celebrity cuts that will inspire you to go shorter than ever',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id,$demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_14'
));

/* -------------- posts in single categories ----------------- */
td_demo_content::add_post(array(
    'title' => 'Olivia Palermo and Hilary Rhoda Have Your Summer Dresses Covered',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'H&M�s Supermodel Campaign Is the Hottest Thing We�ve Seen All Week',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => 'Beauty Editors Tell Us Which Products They�re Excited to Use',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => 'Style in Milano: 15 of The Boldest Beauty Looks Trending',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => '15 Standout Beauty Looks from the Paris Runways',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => '10 Style Tips to Look Instantly Slimmer',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => 'Your Hottest Spring Accessory & Personality',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => 'Spring Manicure Trends You Need to Wear Now',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => 'The 5 New Watch Trends To Try Now',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => 'MTV Movie Awards: Our Top 10 best dressed celebrities',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Everyone Saved the Best Accessories For Last at MFW',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Vancouver Fashion Week Brings Top Fashion Talent for Fall 2017',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => 'This New Floral Trend Is About to Sprout Up Everywhere',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => 'Who Will Win The Red Carpet This Awards Season?',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => 'Oscars: See All Of The Best (And Worst) Dresses',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => 'We Found the Sexiest Lingerie on the Internet',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => 'How Much People Really Get Paid to Attend Fashion Shows',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => 'Kendall Jenner Took Off Her Calvins For Her GQ Cover',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => 'History of Victoria�s Secret�s Sexiest Angels',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => 'The Perfect Shoes and Bags to Pair With Spring Looks',
    'file' => td_global::$get_template_directory . '/includes/demos/fashion/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));