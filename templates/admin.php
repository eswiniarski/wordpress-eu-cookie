<div class="wrap">
    <h1>EU Cookie</h1>

    <form action="options.php" method="post">
        <?php
        settings_fields('eu-cookie-settings');
        do_settings_sections('eu-cookie-settings');
        ?>
        <table class="form-table">
            <tr>
                <th>Text color</th>
                <td>
                    <input type="color" placeholder="#000000" name="eu_cookie_text_color" value="<?= esc_attr(get_option('eu_cookie_text_color')); ?>"/>
                </td>
            </tr>
            <tr>
                <th>Background color</th>
                <td>
                    <input type="color" placeholder="#000000" name="eu_cookie_bg_color" value="<?= esc_attr(get_option('eu_cookie_bg_color')); ?>"/>
                </td>
            </tr>
            <tr>
                <th>Animation type</th>
                <td>
                    <select id="animationType">
                        <option disabled selected value>Select animation type</option>
                        <option value="bounce">bounce</option>
                        <option value="flash">flash</option>
                        <option value="pulse">pulse</option>
                        <option value="rubberBand">rubberBand</option>
                        <option value="shake">shake</option>
                        <option value="swing">swing</option>
                        <option value="tada">tada</option>
                        <option value="wobble">wobble</option>
                        <option value="jello">jello</option>
                        <option value="heartBeat">heartBeat</option>
                        <option value="fadeOut">fadeOut</option>
                        <option value="zoomOut">zoomOut</option>
                        <option value="zoomOutDown">zoomOutDown</option>
                        <option value="bounceIn">bounceIn</option>
                        <option value="bounceOut">bounceOut</option>
                        <option value="fadeIn">fadeIn</option>
                        <option value="slideInUp">slideInUp</option>
                        <option value="slideInDown">slideInDown</option>
                        <option value="slideOutUp">slideOutUp</option>
                        <option value="slideOutDown">slideOutDown</option>
                        <option value="zoomIn">zoomIn</option>
                        <option value="zoomInDown">zoomInDown</option>
                    </select>
                    <input type="hidden" name="eu_cookie_animation_type" value="<?= esc_attr(get_option('eu_cookie_animation_type')); ?>" />
                </td>
            </tr>
            <tr>
                <th>Message</th>
                <td>
                    <textarea placeholder="Message" name="eu_cookie_message" rows="5" cols="50"><?php echo esc_attr(get_option('eu_cookie_message')); ?></textarea>
                </td>
            </tr>
            <tr>
                <td><?php submit_button(); ?></td>
            </tr>
        </table>
    </form>
</div>
