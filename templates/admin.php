<div class="wrap">
    <h1>EU Cookie</h1>

    <form action="options.php" method="post">
        <?php
          settings_fields('eu-cookie-settings');
          do_settings_sections('eu-cookie-settings');
        ?>
        <table class="form-table">
            <tr>
                <th>Background color</th>
                <td><input type="color" placeholder="#000000" name="eu_cookie_bg_color" value="<?php echo esc_attr(get_option('eu_cookie_bg_color')); ?>" /></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><textarea placeholder="Message" name="eu_cookie_message" rows="5" cols="50"><?php echo esc_attr(get_option('eu_cookie_message')); ?></textarea></td>
            </tr>
            <tr>
                <td><?php submit_button(); ?></td>
            </tr>
        </table>
      </form>
</div>
