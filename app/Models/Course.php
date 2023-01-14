<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mode;
use App\Models\Category;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'cover', 'description', 'duration', 'start_dates', 'fee', 'language', 'seats_available'];

    public function mode()
    {
        return $this->belongsTo(Mode::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
