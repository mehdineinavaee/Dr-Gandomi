<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventCategory;
use App\Models\OurProfessor;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'date', 'day', 'hour', 'location', 'cover', 'title', 'description', 'start', 'end'];

    public function event_category()
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(OurProfessor::class);
    }

    public function advisor()
    {
        return $this->belongsTo(OurProfessor::class);
    }

    public function referee()
    {
        return $this->belongsTo(OurProfessor::class);
    }
}
