<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function uploadFile($file)
    {
        // create image manager with desired driver
        $manager = new ImageManager(new Driver());
        $random = hexdec(uniqid());
        // $filename = $random . '.' . $file->extension();
        $webpFilename = $random . '.webp';

        $img = $manager->read($file);

        $web_image_width = 480;

        $height = $img->height();
        $width = $img->width();
        $scale = $height / $width;

        $web_image_height = $scale * $web_image_width;


        create_folder('gallery');

        $web_img = $img->resize($web_image_width, $web_image_height);
        $web_img->toWebp(90)->save(storage_path('app/public/uploads/gallery/' . $webpFilename));
        return $webpFilename;
    }

    protected function removeFile($file, $path)
    {
        $filePath = 'public/uploads/'.$path .'/' . $file;
        if(Storage::exists($filePath)) {
            Storage::delete($filePath);
        }
    }

}
