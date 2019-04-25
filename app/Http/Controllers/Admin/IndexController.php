<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController {
  public function index() {
    dd(Auth::id());
    return view("admin/index/index");
  }
}