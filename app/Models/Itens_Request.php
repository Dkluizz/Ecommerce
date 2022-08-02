<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Itens_Request extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "itens_requests";
    protected $fillable = ["amount", "value", "dt_item", "product_id","request_id"];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'id');
    }
}
