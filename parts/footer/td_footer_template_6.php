<div class="td-footer-wrapper td-footer-template-6 <?php echo td_util::get_option('td_full_footer'); ?>">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <?php td_global::vc_set_custom_column_number(3); ?>
                <?php dynamic_sidebar('Footer 1'); ?>
            </div>
        </div>

        <div class="td-pb-row">
            <?php locate_template('parts/footer/td_footer_extra_bottom.php', true); ?>
        </div>
    </div>
</div>