<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Models\RedisImage;

class RedisImageController extends Controller
{
    public function index($id) {

        $cachedBlog = Redis::get('redis_images_' . $id);
      
      
        if(isset($cachedBlog)) {
            $blog = json_decode($cachedBlog, FALSE);
      
            return response()->json([
                'status_code' => 201,
                'message' => 'Fetched from redis',
                'data' => $blog,
            ]);
        }else {
            $blog = RedisImage::find($id);
            Redis::set('redis_images_' . $id, $blog);
      
            return response()->json([
                'status_code' => 201,
                'message' => 'Fetched from database',
                'data' => $blog,
            ]);
        }
      }
}
