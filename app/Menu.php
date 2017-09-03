<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/6
 * Time: 23:48
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = ['id'];

    protected $table = 'admin_home_menus';
}