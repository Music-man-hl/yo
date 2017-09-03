<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/6
 * Time: 22:35
 */

namespace App\Http\Controllers;


class CalendarController
{
    public function index(){

        return view('calendar');
    }
}