<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'user_id', 'name', 'price','category_id'
    ];

    protected $hidden = [
        'created_at', 'updated_at','category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function category(){
        return $this->hasOne(Category::class, 'id','category_id');
    }

    public function getCategoryAttribute(){
        $cat_name = Category::where('id',$this->category_id)->first();

        return $cat_name->name;
    }

    public $appends = ['category'];

}
