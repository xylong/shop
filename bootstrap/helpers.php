<?php

/**
 * Created by PhpStorm.
 * User: xuyunlong
 * Date: 2019/2/10
 * Time: 5:45 PM
 */

use Illuminate\Support\Facades\Route;

/**
 * 路由名称转换为 CSS 类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
