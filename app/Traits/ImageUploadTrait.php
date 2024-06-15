<?php

namespace App\Traits;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

trait ImageUploadTrait
{
    protected $image_path  = "app/public/images";
    protected $img_height = 600;
    protected $img_width = 900;

    public function uploadImage($img)
    {
        if($img){
            $manager = new ImageManager(new Driver());
            $img_name = $this->imageName($img);
            $img = $manager->read($img);
            $img = $img->resize($this->img_width, $this->img_height)->save(storage_path($this->image_path.'/'.$img_name));
        }
        return $img_name;
    }

    public function imageName($image)
    {
        return time().'-'.$image->getClientOriginalName();
    }
}