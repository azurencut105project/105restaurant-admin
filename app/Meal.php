<?php

namespace App;
use \App\Restaurant as RestaurantEloquent;
use \App\Detail as DetailEloquent;
use \App\MealKeyword as MealKeywordEloquent;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function detail(){
        return $this->belongsTo(DetailEloquent::class);
    }
    public function restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
    public function MealKeyword(){
        return $this->hasMany(MealKeywordEloquent::class);
    }
}
