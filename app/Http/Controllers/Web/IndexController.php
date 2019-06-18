<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;

class IndexController extends BaseController {
    public function index() {
        return view('web.index');
    }

    /**
     * 反馈
     * @author 符肖亚
     * @date   2019-05-06
     * */
    public function advise(Request $request) {
        if ($request->isMethod('post')) {
            return $this->advisePost();
        }
        return view('web.advise');
    }

    protected function advisePost() {
        return response()->json(['name' => 'shawn']);
    }
}