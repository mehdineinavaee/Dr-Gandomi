<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeOne extends Model
{
    use HasFactory;
    protected $fillable = ['backgroundBanner', 'banner', 'welcome', 'slogan'];
}
