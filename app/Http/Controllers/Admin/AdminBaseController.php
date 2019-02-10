<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;

class AdminBaseController extends BaseController
{
    public function __construct()
    {
        $arr = explode('.', Route::currentRouteName());

        if (count($arr) > 1)
            $this->action = $arr[count($arr)-2] . '.' . $arr[count($arr)-1];
        if (count($arr) == 1)
            $this->action = $arr[count($arr)-1];

        $this->template = 'backend.crud.' . $this->action;

        $this->route = explode('.', $this->action)[0];
        $this->vars = array_add($this->vars, 'route_current', $this->route);
    }
}
