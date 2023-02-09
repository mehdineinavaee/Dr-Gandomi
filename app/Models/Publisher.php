<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Publisher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'postal_code', 'tell'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
