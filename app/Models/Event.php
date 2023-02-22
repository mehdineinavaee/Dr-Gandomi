<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventCategory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'date', 'day', 'hour', 'location', 'cover', 'title', 'description', 'start', 'end'];

    public function event_category()
    {
        return $this->belongsTo(EventCategory::class);
    }
}
