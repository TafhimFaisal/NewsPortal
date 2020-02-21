<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategories extends Model
{
    use SoftDeletes;
    private $filable = [ 
        'name_english',
        'name_bangla',
        'category_id'
    ];
}
