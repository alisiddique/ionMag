<div class="td-footer-wrapper td-footer-template-15 <?php echo td_util::get_option('td_full_footer'); ?>">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);
                locate_template('parts/footer/td_footer_extra_column.php', true);
                dynamic_sidebar('Footer 1');
                ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);

                echo td_global_blocks::get_instance('td_block_3')->render(array(
                'custom_title' => __td('EDITOR PICKS', TD_THEME_NAME),
                'limit' => 3,
                'sort' => 'featured'
                ));

                dynamic_sidebar('Footer 2');
                ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);

                echo td_global_blocks::get_instance('td_block_popular_categories')->render(array(
                    'custom_title' => __td('POPULAR CATEGORY', TD_THEME_NAME),
                    'limit' => 8
                ));

                dynamic_sidebar('Footer 3');
                ?>
            </div>
        </div>
    </div>
</div>