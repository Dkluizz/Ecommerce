<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itens_Request extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["amount", "value", "dt_item", "product_id","request_id"];
}
