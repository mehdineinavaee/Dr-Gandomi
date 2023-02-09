<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
