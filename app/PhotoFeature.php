<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
