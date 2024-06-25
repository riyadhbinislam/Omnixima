<?php
/**
 * class Menus
 * @package Omnixima
 */

namespace OMNIXIMA\inc;
use OMNIXIMA\inc\traits\singleton;

class Menus {
    use singleton;

    protected function __construct() {
        //load other classes.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //actions and filters
        add_action('init', [ $this, 'register_menus' ]);
    }

    public function register_menus() {
        register_nav_menus([
              'omni-header-menu' => esc_html__('Header Menu',  'omnixima'),
              'omni-footer-menu' => esc_html__('Footer Menu',  'omnixima'),
            ]);
    }

    public function get_menu_id( $location ){
        //Get all the locations.
        $locations = get_nav_menu_locations( );

        //Get Object id by location
        $menu_id = $locations[$location];

        if (!empty($menu_id)) {
            return $menu_id;
        } else {
            return '';
        }


    }

    public function get_child_menu_items( $menu_array, $parent_id ){
        $child_menus = [];

        if(! empty($menu_array) && is_array($menu_array)){
            foreach ($menu_array as $menu){
                if (intval( $menu->menu_item_parent ) === $parent_id ){
                    array_push( $child_menus, $menu );
                }
            }
        }

        return $child_menus;
    }
}
