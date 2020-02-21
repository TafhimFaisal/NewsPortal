<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Images extends Model
{
    use SoftDeletes;
    private $filable = [
        'image_source',

        'image_title_english',
        'image_title_bangla',

        'image_disctiption_english',
        'image_disctiption_bangla',
        
        'photo_feature_id'
    ];

    public function photoFeature()
    {
        return $this->belongsTo(PhotoFeature::Class,'photo_feature_id');
    }
}
