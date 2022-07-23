<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["name","value","photo","description","id_category"];
   
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function scopeFilterByCategory($query, $id_category =null){
        return $query->when($id_category,fn($query)=>$query->whereHas('category', fn($query)=>$query->where ('id',$id_category)));
    }
}
