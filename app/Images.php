<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = [
       'image','name', 'category', 'type'
    ];
    public function setCategoryAttribute($value){
        $this->attributes['category'] = (string)($value);
    }
    public function setTypeAttribute($value){
        $this->attributes['type'] = (string)($value);
    }
}
