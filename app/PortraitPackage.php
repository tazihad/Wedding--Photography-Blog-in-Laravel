<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortraitPackage extends Model
{
    protected $fillable = ['portrait_package_name', 'portrait_package_price'];

    public function portraitpackageany()
    {
        return $this->hasMany('App\PortraitPackageGallery', 'portrait_package_id', 'id');
    }
}
