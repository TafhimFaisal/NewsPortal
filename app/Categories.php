<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    protected $fillable = [ 
        'name_english',
        'name_bangla' 
    ];
    
    public function subCategories()
    {
        return $this->hasMany();
    }
}
