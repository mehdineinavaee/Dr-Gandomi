<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['tel', 'logo', 'favicon', 'footer_description', 'address', 'email', 'phone', 'courses', 'blog', 'our_professors', 'faqs', 'gallery', 'my_account', 'events', 'event_details', 'products', 'cart', 'wishlist', 'contact', 'settings', 'home_one', 'categories', 'modes', 'publishers', 'authors', 'translators'];
}
