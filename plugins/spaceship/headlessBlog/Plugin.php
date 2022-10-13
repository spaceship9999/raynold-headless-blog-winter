<?php

namespace Spaceship\HeadlessBlog;

use Backend\Facades\Backend;
use Illuminate\Support\Facades\App;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Blog',
            'description' => 'Provides blog functionality.',
            'author' => 'Raynold Chow',
            'icon' => 'icon-file-text'
        ];
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label'       => 'Blog',
                'description' => 'Provides blog functionality.',
                'category'    => 'Tools',
                'icon'        => 'icon-file-text',
                'url'         => Backend::url('log'),
                'order'       => 500,
                'keywords'    => 'blog write'
            ]
        ];
    }
}
