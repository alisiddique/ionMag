<!-- Live search background color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">LIVE SEARCH BACKGROUND COLOR</span>
        <p>Select live search background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_live_search_background',
            'default_color' => '#ffffff'
        ));
        ?>
    </div>
</div>

<!-- Live search borders color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">LIVE SEARCH BORDERS COLOR</span>
        <p>Select live search borders color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_live_search_border_color',
            'default_color' => 'rgba(0, 0, 0, 0.06)'
        ));
        ?>
    </div>
</div>

<!-- Live search text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">LIVE SEARCH TEXT COLOR</span>
        <p>Select live search text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_live_search_text_color',
            'default_color' => '#000000'
        ));
        ?>
    </div>
</div>

<!-- Live search accent color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">LIVE SEARCH ACCENT COLOR</span>
        <p>Select live search accent color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_live_search_accent_color',
            'default_color' => '#42bdcd'
        ));
        ?>
    </div>
</div>