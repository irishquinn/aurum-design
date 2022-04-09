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
 * Panel class for WordPress Theme Customize.
 *
 * @package  WR_Theme
 * @since    1.0
 */
class WR_Nitro_Customize_Panel extends WP_Customize_Panel
{
    /**
     * Array of page the panel's customize controls apply to.
     *
     * @var  array
     */
    public $apply_to = ['all'];

    /**
     * Gather the parameters passed to client JavaScript via JSON.
     *
     * @return  array The array to be exported to the client as JSON.
     */
    public function json()
    {
        $array = wp_array_slice_assoc((array) $this, ['id', 'description', 'priority', 'type']);

        $array['title'] = html_entity_decode($this->title, ENT_QUOTES, get_bloginfo('charset'));
        $array['content'] = $this->get_content();
        $array['active'] = $this->active();
        $array['instanceNumber'] = $this->instance_number;
        $array['apply_to'] = $this->apply_to;

        return $array;
    }
}
