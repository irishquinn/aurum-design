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
 * Radio image custom control for WordPress Theme Customize.
 *
 * @package  WR_Theme
 * @since    1.0
 */
class WR_Nitro_Customize_Control_Radio_Image extends WP_Customize_Control
{
    public $type = 'radio-image';

    /**
     * Enqueue control related scripts/styles.
     *
     * @return  void
     */
    public function enqueue()
    {
        static $enqueued;

        if (!isset($enqueued)) {
            wp_enqueue_script('wr-nitro-customize-radio-image', get_template_directory_uri() . '/assets/woorockets/js/admin/customize/control/radio-image.js', [], '1.0.0', true);

            wp_localize_script('wr-nitro-customize-radio-image', 'wr_nitro_customize_radio_image', [
                'type' => $this->type,
            ]);

            $enqueued = true;
        }
    }

    /**
     * Render the control's content.
     *
     * @return  void
     */
    public function render_content()
    {
        if ($this->label) {
            ?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<?php
        }

        if ($this->description) {
            ?>
			<span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
			<?php
        }

        $value = $this->value(); ?>
		<div class="customize-control-content" id="wr-<?php echo esc_attr($this->type); ?> - <?php echo esc_attr($this->id); ?>">
			<?php foreach ($this->choices as $val => $label) { ?>
			<div class="wr-radio-image <?php if (checked($value, $val, false)) {
            echo 'selected';
        } ?>">
				<img src="<?php
                    if (is_array($label) && isset($label['image'])) {
                        echo esc_url($label['image']);
                    } else {
                        echo esc_url($label);
                    }
                ?>" alt="<?php
                    if (is_array($label) && isset($label['title'])) {
                        echo esc_attr($label['title']);
                    }
                ?>">
				<input type="radio" name="<?php echo esc_attr($this->id); ?>" title="<?php
                    if (is_array($label) && isset($label['title'])) {
                        echo esc_attr($label['title']);
                    }
                ?>" value="<?php echo esc_attr($val); ?>" <?php
                    checked($value, $val);
                ?>>
			</div>
			<?php } ?>
		</div>
		<?php
    }
}
