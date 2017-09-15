<?php
namespace App\Http\Controllers\Upload;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
/**
 * Created by PhpStorm.
 * User: davi
 * Date: 2016/2/3
 * Time: 22:27
 */
class CkeditorUploadController extends Controller
{
    public function upload(){  
        $extensions = array("jpg","bmp","gif","png");  
        $uploadFilename = $_FILES['upload']['name'];  
        $extension = pathInfo($uploadFilename,PATHINFO_EXTENSION);  
        if(in_array($extension,$extensions)){  
            $uploadPath = public_path()."/upload/ckeditor/";  
            $uuid = str_replace('.','',uniqid("",TRUE)).".".$extension;  
            $desname = $uploadPath.$uuid;  
            $previewname = url('/').'/upload/ckeditor/'.$uuid;  
            $tag = move_uploaded_file($_FILES['upload']['tmp_name'],$desname);  
            $callback = $_REQUEST["CKEditorFuncNum"];  
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$previewname."','');</script>";  
        }else{  
            echo "<font color=\"red\"size=\"2\">*文件格式不正确（必须为.jpg/.gif/.bmp/.png文件）</font>";  
        }  
    } 
}