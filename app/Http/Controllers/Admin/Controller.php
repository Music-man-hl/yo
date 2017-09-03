<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/28
 * Time: 22:13
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;

class Controller extends \App\Http\Controllers\Controller
{
    function __construct()
    {
        $menus = [];
        $par_menus = DB::table('admin_menus')->where('parent_id', 0)->get();
        foreach ($par_menus as $par_menu)
        {
            $children_menu = DB::table('admin_menus')->where('parent_id', $par_menu->id)->get();
            foreach ($children_menu as $menu) {
                $menus[$par_menu->name][] = $menu;
            }
        }

        view()->share('menus',$menus);
        view()->share('uri',$_SERVER['REQUEST_URI']);
    }
}