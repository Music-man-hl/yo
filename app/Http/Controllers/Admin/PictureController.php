<?php

namespace App\Http\Controllers\Admin;


use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function index()
    {
        $list = Storage::files('/');

        return view('admin.picture')->with('list',$list);
    }

    public function store(Request $request)
    {
        try {
            $result = $file = $request->file('picture')->store('/123');

            if (!$result) return back()->withErrors('失败');

            $data = [
                'uid' => $request->user()->id,
                'source_url' => $result,
                'type' => $request->get('type')
            ];
            Picture::create($data);
        }catch (\Exception $e){
            return back()->withErrors($e);
        }
        return '{}';
    }

}