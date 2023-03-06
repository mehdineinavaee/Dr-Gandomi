<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'logo', 'favicon', 'footer_description', 'address', 'email', 'tel', 'facebook', 'instagram', 'linkedin', 'twitter', 'google_map_area', 'courses', 'blog', 'our_professors', 'faqs', 'gallery', 'my_account', 'events', 'event_details', 'products', 'cart', 'contact', 'settings', 'home_one', 'categories', 'modes', 'publishers', 'authors', 'translators', 'study'];
}
