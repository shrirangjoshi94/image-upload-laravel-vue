<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function upload(Request $request)
    {
        $request->user()->avatar = $request->image;
        $request->user()->save();

        return response(null, 200);
    }

}
