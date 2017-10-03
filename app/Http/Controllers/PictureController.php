<?php
/**
 * Created by PhpStorm.
 * User: yo
 * Date: 2017/3/10
 * Time: 22:31
 */

namespace App\Http\Controllers;


use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        return view('pictures', compact('pics','type'))->with('domain',config('filesystems.disks.qiniu.domains.default'));
    }

    public function store(Request $request){

        try {
            $result = $file = $request->file('picture')->store('/');

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
        return back();

    }

    public function destroy ($src)
    {
        $result = \Storage::delete($src);
        if ($result)
        {
            Picture::where('source_url',$src)->delete();
            return 1;
        }else{
            return 0;
        }
    }

}