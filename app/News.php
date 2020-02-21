<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Categories;
use App\SubCategories;

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

    public function category()
    {
        return $this->belongsTo(Categories::Class,'category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategories::Class,'sub_category_id');
    }
}
