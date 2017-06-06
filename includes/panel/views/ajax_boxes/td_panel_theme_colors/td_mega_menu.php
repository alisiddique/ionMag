
<!-- Mega menu background color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MEGA MENU BACKGROUND COLOR</span>
        <p>Select mega menu background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_mega_menu_background',
            'default_color' => '#ffffff'
        ));
        ?>
    </div>
</div>

<!-- Mega menu text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MEGA MENU TEXT COLOR</span>
        <p>Select mega menu text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_mega_menu_color',
            'default_color' => '#000000'
        ));
        ?>
    </div>
</div>

<!-- Mega menu accent color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MEGA MENU ACCENT COLOR</span>
        <p>Select mega menu accent color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_mega_menu_accent_color',
            'default_color' => '#42bdcd'
        ));
        ?>
    </div>
</div>