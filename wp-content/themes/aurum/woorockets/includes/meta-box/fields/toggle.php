<?php
/**
 * @version    1.0.1
 * @package    Aurum_Theme
 * @author     Chris Quinn <https://github.com/irishquinn>
 * @copyright  Copyright (C) 2019 Chris Quinn. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://aurumdesign.com
 */

/**
 * Colors field for RW Meta Box plugin.
 *
 * @package  WR_Theme
 * @since    1.0
 */
class RWMB_Toggle_Field extends RWMB_Field
{
    /**
     * Get field HTML
     *
     * @param mixed $meta
     * @param array $field
     *
     * @return string
     */
    public static function html($meta, $field)
    {
        // Prepare meta value
        $meta = $meta == '' ? $field['std'] : $meta;

        // Print HTML
        ob_start(); ?>
		<div id="<?php echo esc_attr($field['id']); ?>-container">
			<input type="checkbox" class="wr-toggle" id="<?php echo esc_attr($field['id']); ?>-checkbox" <?php
                checked(( int ) $meta, 1); ?> onchange="jQuery(this).parent().children('input[name]').val(this.checked ? '1' : '0').trigger('change');">
			<label for="<?php echo esc_attr($field['id']); ?>-checkbox"></label>
			<input type="hidden" id="<?php echo esc_attr($field['id']); ?>" name="<?php echo esc_attr($field['id']); ?>" value="<?php
                echo esc_attr($meta); ?>">
		</div>
		<?php
        return ob_get_clean();
    }
}
