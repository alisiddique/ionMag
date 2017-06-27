<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');


/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */

// mobile menu background
td_demo_misc::update_background_mobile('td_pic_9');

/*  ----------------------------------------------------------------------------
    logo
*/
td_demo_misc::update_logo(array(
    'normal' => 'td_logo_header',
    'retina' => 'td_logo_header_retina',
    'mobile' => 'td_logo_header'
));

//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_logo_header',
    'retina' => 'td_logo_header_retina'
));

/*  ----------------------------------------------------------------------------
    footer text
*/


/*  ----------------------------------------------------------------------------
    socials
*/

td_demo_misc::add_social_buttons(array(
    'facebook' => '#',
    'twitter' => '#',
    'youtube' => '#',
    'instagram' => '#',
    'vimeo' => '#'
));


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('sidebar', 'td_blog_beauty_sidebar_ad');


/*  ----------------------------------------------------------------------------
    sidebars
 */
//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_author_widget',
    array (
        'custom_title' => '',
        'author_id' => '1',
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_social_counter_widget',
    array (
        'custom_title'  => "",
        'facebook'      => "tagDiv",
        'instagram'     => "tagDiv",
        'googleplus'    => "+tagdivThemes",
        'youtube'       => "tagDiv",
        'twitter'       => "tagDivOfficial",
        'style'         => "style9 td-social-boxed td-social-colored"
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_3_widget',
    array (
        'custom_title' => 'LATEST POSTS',
        'limit' => '5'
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_popular_categories_widget',
    array (
        'custom_title' => 'POPULAR CATEGORIES',
        'limit' => '6'
    )
);


/*  ---------------------------------------------------------------------------
    categories
*/

$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Beauty',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => ''
));

    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Fragrances',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Hair Care',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Makeup',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Outfits',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Skin Care',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_7_id =td_demo_category::add_category(array(
        'category_name' => 'Style',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Fashion',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Lifestyle',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Wellness',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_11_id =td_demo_category::add_category(array(
    'category_name' => 'Fitness',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_12_id =td_demo_category::add_category(array(
    'category_name' => 'Accessories',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));


/*  ----------------------------------------------------------------------------
    pages
 */

// homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/homepage.txt',
    'template' => 'default.php',   // the page template full file name with .php
    'homepage' => true
));

/*  ----------------------------------------------------------------------------
    menu
 */

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Beauty',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Wellness',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));

// add a subcategory to the sub-menu
$parent_submenu_id_1 = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Fitness',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => $parent_submenu_id_1
));
td_demo_menus::add_link(array(
    'title' => 'Accessories',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => $parent_submenu_id_1
));



/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

td_demo_content::add_post(array(
    'title' => 'How to Pick the Perfect House Plant for Positive Energy',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => '10 Most Affordable Jewellery Basics to Buy Right Now',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Most Amazing Silver Accessories to Buy This Fall',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_3'
));


/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'The 10 Most Common Dreams and What is Their Meaning',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The 10 Best Apps for Planning Your Next Trip',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Fashion Outfit Ideas to Try From Instagram This Week',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'How To Match Your Leather Hat With Your Summer Dress',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => '7 Soaps to Supercharge Your Daily Skincare Routine',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'How to Find the Perfect Sunglasses for Your Face Shape',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => '15 of the Most Popular Make Up Tips on Pinterest',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Find Out Why 18 Models Went Platinum Backstage',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Top Tip: How to Find Your Signature Scent This Spring',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => '5 Yoga Poses For Your Next Outdoor Training Session',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */
// posts in one category

td_demo_content::add_post(array(
    'title' => 'Questions You Must Ask Yourself Before a Workout',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Tighten Your Butt and Upper Body in Just 4 Moves',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'The Uncomplicated Guide To Training and Life',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => '8 Things I Wish I Knew Before I Started Running',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_4'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Best Ways to Show Off your Stunning Diamond Bling',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Hottest Modern Accessories for a Stunning Look',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Most Amazing Silver Accessories to Buy This Fall',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Unique Engagement Ring Ideas to Inspire your Boyfriend',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '10 vegetarian Meals for Health Conscious Hungry Girls',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'A Complete Guide to Finding the Best Spa in the World',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'The 10 Most Common Dreams and What is Their Meaning',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'What to Do When You Hit a Healthy Lifestyle Plateau',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'A Girl’s Guide: Tricks To Save Time in the Morning',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Don’t Let Your Summer Hard Work Go To Waste',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Five Rules For a Long, Healthy and Happy Life',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Motivate Monday: Only 3 Days Left of Summer',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Fashion Outfit Ideas to Try From Instagram This Week',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Inside a Fashion Blogger’s Fancy Apartment',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Style Spy: Fashion Model Goes Casual in Cargo and Plaid',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'What to Wear Tonight, No Matter What You’ve Got Planned',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '5 Travel Outfits That Are Comfortable and Chic',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'What to Wear on a First Date? We Asked the Experts!',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'How to Find the Perfect Sunglasses for Your Face Shape',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Weekly Window Shop: Cosy Cable Knits For Winter',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '8 Best Products to Grab on Your Next Drugstore Run',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'How to Find the Perfect Blush for Your Complexion',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Super Surreal Nail Art: The Sky is the Limit',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Game Changers: Best Liners for Eye Contour',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_2'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Secret To the Perfect Golden Hair Glow',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Discover These Sexy Hairstyles That Men Love',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Find Out Why 18 Models Went Platinum Backstage',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Best Five Rules for Amazing Hair Volume',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Top Tip: How to Find Your Signature Scent This Spring',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => '5 Yoga Poses For Your Next Outdoor Training Session',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Falling In Love With Fragrances: Oriental Perfumes',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Summer’s Scent Track: Best Warm Weather Fragrances',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Secret To the Perfect Golden Hair Glow',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Discover These Sexy Hairstyles That Men Love',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Find Out Why 18 Models Went Platinum Backstage',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Best Five Rules for Amazing Hair Volume',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '5 Classic Perfumes and Colognes You Should be Wearing',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Falling In Love With Fragrances: Oriental Perfumes',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Summer’s Scent Track: Best Warm Weather Fragrances',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Top Tip: How to Find Your Signature Scent This Spring',
    'file' => td_global::$get_template_directory . '/includes/demos/blog_beauty/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_2'
));