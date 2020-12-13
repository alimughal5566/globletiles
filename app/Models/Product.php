<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $with=['category','company'];
    protected $fillable=['name','thumbnail','description','category_id','company_id','price'];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function company(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
