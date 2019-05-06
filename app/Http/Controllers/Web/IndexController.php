<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;

class IndexController extends BaseController {
    public function index() {
//        dd(resource_path('views'));
        return view('web.index');
    }

    /**
     * 反馈
     * @author 符肖亚
     * @date   2019-05-06
     * */
    public function advise(Request $request) {
        if ($request->isMethod('post')) {
            echo "123";
            die;
            $this->advisePost();
        }
        return view('web.advise');
    }

    protected function advisePost() {

    }
}