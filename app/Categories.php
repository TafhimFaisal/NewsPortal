<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\SubCategory;
use App\News;

class Categories extends Model
{
    use SoftDeletes;
    protected $fillable = [ 
        'name_english',
        'name_bangla' 
    ];
    
    public function subCategories()
    {
        return $this->hasMany(SubCategory::Class,'category_id');
    }

    public function news()
    {
        return $this->hasMany(News::Class,'category_id');
    }


}
