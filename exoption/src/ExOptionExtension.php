<?php

namespace Hobby\ExOption;

use Encore\Admin\Extension;

class ExOptionExtension extends Extension
{
    public $name = 'exoption';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Exoption',
        'path'  => 'exoption',
        'icon'  => 'fa-gears',
    ];
}