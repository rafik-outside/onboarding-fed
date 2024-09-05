<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $hasPrimaryMenu = has_nav_menu('primary_menu') ? true : false;
        $primaryMenus   = wp_get_nav_menu_items('primary-menu');
        $headerSettings = get_field('header_settings','option');
        return [
            'hasPrimaryMenu'        => $hasPrimaryMenu,
            'primaryMenus'          => ! empty($primaryMenus) && is_array($primaryMenus) ? $primaryMenus : false,
            'headerLogo'              => isset($headerSettings['header_logo']) && is_array($headerSettings['header_logo']) ? $headerSettings['header_logo'] : false,
            'cta'              => isset($headerSettings['call_to_action_button']) && is_array($headerSettings['call_to_action_button']) ? $headerSettings['call_to_action_button'] : false,
        ];
    }
}
