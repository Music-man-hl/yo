<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('session');
    }

    public function store(Request $request){
        if ($request->input('call',0)==0)
        {
            $uid = \Auth::id();
            $tid = $uid==1?2:1;
            $talk = $request->talk;
            $model = Session::create(['uid'=>$uid,'tid'=>$tid,'session'=>$talk]);
            if ($model) echo 1;
        }
        elseif ($request->input('call',0)==1)
        {
            $uid = \Auth::id();
            $result = Session::where('tid',$uid)->where('read',null)->get();
            return json_encode($result);
        }
        else
        {
            $data = json_decode($request->input('data',''));
            foreach ($data as $item) {
                Session::where('id',$item->Id)->update(['read'=>1]);
            }
        }

    }
}
