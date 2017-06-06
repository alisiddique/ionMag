<div class="td-footer-wrapper td-footer-template-12 <?php echo td_util::get_option('td_full_footer'); ?>">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span4">
                <?php td_global::vc_set_custom_column_number(1); ?>
                <?php dynamic_sidebar('Footer 1'); ?>
            </div>

            <div class="td-pb-span8">
                <?php td_global::vc_set_custom_column_number(2); ?>
                <?php dynamic_sidebar('Footer 2'); ?>
            </div>
        </div>
    </div>
</div>