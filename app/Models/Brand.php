<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = "brands";
    protected $primarykey = "id";
    protected $fillable = ["brandname", "status"];


    public function products(){
        return $this->hasMany(Product::class,"brand_id");
    }
    use HasFactory;
}
