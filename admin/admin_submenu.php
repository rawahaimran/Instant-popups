<?php

function I_pop_admin_main_submenu_page()
{
    $popup_img_name = [
        'snipped.png',
        'default.png',
    ];

    if (isset($_POST['save-popup'])) {
        $popup_image = esc_sql($_POST['popup-image']);

        if (get_option('image-for-popup', -1) == false)
            add_option('image-for-popup', $popup_image);
        else {
            update_option('image-for-popup', $popup_image);
        }
    }
?>
    <div class="wrap">
        <h2 class="wp-heading-inline"><?php echo get_admin_page_title(); ?></h2>
        <h3> Select Popup to Show</h3>
        <form action="admin.php?page=popup-settings" method="post">
            <ul>

                <?Php
                foreach ($popup_img_name as $pop_item) {
                    echo "<li><input type='radio' name='popup-image' id='popup-image' value='$pop_item'>
                <label for='$pop_item'>$pop_item</label>
                </li>";
                }
                ?>
            </ul>
            <input type="submit" value="Save" name="save-popup">
        </form>
    </div>
<?php
}

/**
 * if (get_option('image-for-popup', -1) == false)
 * agar 'image-for-popup naam ki key wp_options mai nhi hogi to ye default false return krega
 */ 