<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class EventCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
