<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/10
 * Time: 22:31
 */

namespace App\Http\Controllers;


use App\Library\QiniuManager;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use qcloudcos\Cosapi;

class PictureController extends Controller
{
    public $bucketName = 'yoyoo';

    public function __construct()
    {

    }

    public function index()
    {
        $type = Input::get('type','Action');
        $pics = Picture::where('type',$type)->orderBy('id')->get();
        return view('pictures')->with('pics',$pics)->with('type',$type);
    }

    public function upload(Request $request){
//dd($request->file('picture')->getClientOriginalName());
        $filePath = $request->file('picture')->getClientOriginalName();
        $content = $request->file('picture');

        try {
            $result = QiniuManager::putFile($filePath, $content);
            if (!$result) return back()->withErrors('失败');

            $data['uid'] = $request->user()->id;
            $data['source_url'] = $result['key'];
            $data['type'] = $request->get('type');
            Picture::create($data);
        }catch (\Exception $e){
            return back()->withErrors('错误');
        }
        return back();

    }

    public function delete()
    {
        $re_path = Input::get('path');
        $path = preg_replace('/\/1253447974\/yoyoo/','',$re_path);
        $result = Cosapi::delFile($this->bucketName, $path);
        if ($result['code']==0)
        {
            Picture::where('resource_path',$re_path)->delete();
        }
        return 1;
    }

}