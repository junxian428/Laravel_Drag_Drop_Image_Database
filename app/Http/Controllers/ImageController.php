<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\UploadImage;
use App\Models\photophoto;
use Illuminate\Support\Facades\Input;
use App\Models\RedisImage;

class ImageController extends Controller
{
    //
    public function upload(){
        $r = request();
        $image = $r->file('uploadFile');

        //$file = File::get($image);
        //$image->move('images',$image->getClientOriginalName());
        $imageName = $r->file('images')->getClientOriginalName();
        $content = $r ->file('images')->get();
        //print($content);
        //$mimer = new \Mimey\MimeTypes();
        //$mimetype = $mimer->getMimeType();
        //print($mimetype);
        //print($content);
        //$data = $r->file('images')->getImageBlob();

        $base64 = 'data:image/png' . ';base64,' . base64_encode($content);
        //print($base64);
        //print($data);
    

        //print($imageName);
     
        $create= photophoto::create([ 
            'image'=>$base64,
        ]);
        
        $create_for_api = RedisImage::create([         
            'image'=>$base64,
        ]);

        Return view("image_upload");
    }
}
