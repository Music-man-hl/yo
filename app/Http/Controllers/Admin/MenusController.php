<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/6
 * Time: 23:07
 */

namespace App\Http\Controllers\Admin;


class MenusController extends Controller
{
    public function index(){

        return view('admin.menus');
    }
}