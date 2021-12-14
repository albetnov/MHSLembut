<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_desc', 'product_banner', 'status_produk', 'status_masa'];

    public function photo()
    {
        return $this->hasMany(ProductPhotos::class, 'photo_id');
    }
}
