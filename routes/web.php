<?php

use Hobby\ExOption\Http\Controllers\ExOptionController;

Route::get('exoption', ExOptionController::class.'@index');