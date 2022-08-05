<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "Cart";
    protected $fillable = ["name", "value", "photo", "description", "amount", "dt_item", "product_id"];
    

}
