<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;
    protected $table = 'varians';
    protected $primaryKey = 'varian_id';
    public function product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}