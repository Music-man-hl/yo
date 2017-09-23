<?php
/**
 * Created by PhpStorm.
 * User: jj421
 * Date: 2017/3/26
 * Time: 0:14
 */

namespace App\Library;


use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class QiniuManager
{
    public static $auth = null;
    public static $token = null;

    public static function getToken()
    {
        if (is_null(static::$auth))
        {
            static::$auth =  new Auth(config('filesystems.disks.qiniu.access_key'),config('filesystems.disks.qiniu.secret_key')  );
        }
        if (is_null(static::$token))
        {
            static::$token = static::$auth->uploadToken(config('filesystems.disks.qiniu.bucket'));
        }
        return static::$token;
    }

    public static function putFile($key,$filePath)
    {
        $token = self::getToken();
        $uploadManager = new UploadManager();

        list($ret,$err) = $result = $uploadManager->putFile($token,$key,$filePath);
        if (! is_null($ret))
        {
            $ret['key'] = config('filesystems.disks.qiniu.domains.default').$ret['key'];
            return $ret;
        }
        return false;
    }
}