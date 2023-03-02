<?php

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_I_pop()
{
    global $wpdb, $table_prefix;
    $wp_table_name = $table_prefix . 'I_pop';
}

/** 
 * The code that runs during plugin deactivation.
 */
function deactivate_I_pop()
{
    global $wpdb, $table_prefix;
    $wp_table_name = $table_prefix . 'I_pop';
}

function I_pop_scripts()
{
    $ver = time();
    $path_css = plugins_url('includes/pop.css', __FILE__);
    $path_js = plugins_url('includes/pop.js', __FILE__);

    wp_enqueue_script('I-pop-js', $path_js, [], $ver, true);
    wp_enqueue_style('I-pop-css', $path_css, '', $ver);
}

function I_pop_admin_page()
{

    add_menu_page('Instant-Popup', 'Instant Popups', 'manage_options', 'instant-popups', 'I_pop_admin_main_page', 'dashicons-bell', 10);
    add_submenu_page('instant-popups', 'Popup Settings', 'popup settings', 'manage_options', 'popup-settings', 'I_pop_admin_main_submenu_page');

    remove_submenu_page('instant-popups', 'instant-popups');

    // remove_submenu_page('instant-popups', 'instant-popups'); first parameter main menu slug. 2nd the slug of the submenu you want to remove.  
}

/**
 * Show the popup on front-page
 */

function show_popup()
{
    if (is_home()) { ?>
        <div class="popup-wrapper">
            <div class="display_popup">
                <img src="<?php echo plugin_dir_url(__FILE__) . 'includes/img/' . get_option('image-for-popup', 'snipped.png'); ?>" alt="popup-img" width="400">
                <i class="close">&times;</i>
            </div>
        </div>

<?php
    }
}
