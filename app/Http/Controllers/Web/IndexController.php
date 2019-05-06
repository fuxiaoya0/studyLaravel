<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Blade;

class IndexController extends BaseController {
    public function index() {
//        dd(resource_path('views'));
        return view('web.index');
    }

    /**
     * 反馈
     * @author 符肖亚
     * @date 2019-05-06
     * */
    public function advise() {
        return view('web.advise');
    }
}