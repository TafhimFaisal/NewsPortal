<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Categories; 
use App\SubCategories;
use App\Images;

class PhotoFeature extends Model
{
    use SoftDeletes;
    private $filable = [
        
        'photo_features_head_line_english',
        'photo_features_head_line_bangla',

        'photo_features_image_source',

        'photo_features_description_english',
        'photo_features_description_bangla',

        'category_id',
        'sub_category_id',
        'tags'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::Class,'category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategories::Class,'sub_category_id');
    }

    public function images()
    {
        return $this->hasMany(Images::Class);
    }
}
