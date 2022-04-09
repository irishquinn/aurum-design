<?php
/**
 * @version    1.0.1
 * @package    Aurum_Theme
 * @author     Chris Quinn <https://github.com/irishquinn>
 * @copyright  Copyright (C) 2019 Chris Quinn. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://aurumdesign.com
 * Custom functions for WooCommerce.
 */

/**
 * Text field for WordPress Theme Customize.
 *
 * @package  WR_Theme
 * @since    1.0
 */
class WR_Nitro_Customize_Control_Text extends WP_Customize_Control
{
    public $type = 'text';

    /**
     * Render the control's content.
     *
     * @return  void
     */
    public function render_content()
    {
        // Generate name for this custom control.
        $name = '_customize-text-' . $this->id;

        if (!empty($this->label)) :
        ?>
		<p><?php echo wp_kses_post($this->label); ?></p>
		<?php
        endif;
    }
}
