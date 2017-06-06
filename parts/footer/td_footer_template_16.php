<div class="td-footer-wrapper td-footer-template-16 <?php echo td_util::get_option('td_full_footer'); ?>">
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
                dynamic_sidebar('Footer 2');
                ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);
                dynamic_sidebar('Footer 3');
                ?>
            </div>
        </div>
    </div>
</div>