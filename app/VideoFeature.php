<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoFeature extends Model
{
    use SoftDeletes;
    
    private $filable = [

        'video_features_head_line_english',
        'video_features_video_link_bangla',

        'video_features_video_discription_english',
        'video_features_video_discription_bangla',

        'category_id',
        'sub_category_id',
        'tags'
    ];

}
