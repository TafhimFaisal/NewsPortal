<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    private $filable = [

        'news_head_line_english',
        'news_head_line_bangla',

        'image_source',

        'news_body_english',
        'news_body_bangla',

        'category_id',
        'sub_category_id',

        'tags'

    ];
    //
}
