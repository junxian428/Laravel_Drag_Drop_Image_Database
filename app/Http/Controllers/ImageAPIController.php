<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photophoto;

class ImageAPIController extends Controller
{
    public function index()
    {
        $image = photophoto::all();
        return response()->json($image);
    }
}
