<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = [
      'name', 'image', 'category', 'sub_category', 'type'
    ];
    public function setCategoryAttribute($value){
        $this->attributes['category'] = (string)($value);
    }
    public function setSubCategoryAttribute($value){
        $this->attributes['sub_category'] = (string)($value);
    }
    public function setTypeAttribute($value){
        $this->attributes['type'] = (string)($value);
    }
}
