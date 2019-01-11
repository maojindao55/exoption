<?php

namespace Hobby\ExOption\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class ExOptionController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('exoption::index'));
    }
}