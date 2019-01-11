<?php
/**
 * Created by PhpStorm.
 * User: hongbin9@staff.weibo.com
 * Date: 2018/12/18
 * Time: 3:13 PM
 */

namespace Hobby\ExOption;

use Encore\Admin\Form\Field;

class ExHeader extends  Field
{

    protected $view = 'exoption::header';

    public function render()
    {
        return parent::render();
    }
}