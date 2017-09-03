<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/2
 * Time: 23:31
 */

namespace App\Http\Controllers\Admin;


class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
