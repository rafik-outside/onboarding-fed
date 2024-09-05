<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Leadspace extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => 'Form Header'
        ];
    }

}
