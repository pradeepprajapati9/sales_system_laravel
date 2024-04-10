<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{

    protected $table = "salesdetails";
    protected $primarykey = "id";
    protected $fillable = ["sales_id", "product_id", "price", "qty", "total_cost"];

    public function saleDetails()
    {
        return $this->belongsTo(SaleDetail::class, "sales_id");
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class, "sales_id");
    }
    use HasFactory;
}
