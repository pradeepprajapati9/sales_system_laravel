<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    protected $table="sales";
    protected $primarykey="id";
    protected $fillable=["total","pay","balance"];

    public function saleDetails(){
        return $this->hasMany(SaleDetail::class,"sales_id");
    }
    use HasFactory;
}
