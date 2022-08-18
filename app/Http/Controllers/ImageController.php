<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class ImageController extends Controller
{
    public function addImage()
    {
        return view('image.index');
    }

    public function storeImage(Request $request)
    {
        $data = new Images();
        if($request->file('image')){
            $file=$request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect('/view-image');
    }

    public function viewImage()
    {
        $imageData = Images::all();
        return view('image.view_image')->with('imageData', $imageData);
    }
}
?>