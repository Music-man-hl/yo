<?php

namespace App\Http\Controllers\Admin;


use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function index()
    {
        $list = Storage::disk('qiniu')->files();
        
        return view('admin.picture')->with('list',$list);
    }

    public function store(Request $request)
    {

        $files = $request->file('picture');
        foreach ($files as $file) {
            $result = Storage::disk('qiniu')->put('', $file);
        }
        $fileSrc = Storage::disk('qiniu')->getDriver()->imagePreviewUrl($result);
        Picture::create([
            'uid' => $request->user()->id,
            'type'=> $request->type,
            'source_url' => $fileSrc
        ]);

        return '{}';
    }

}