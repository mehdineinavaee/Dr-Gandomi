<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Mode extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function modes()
    {
        return $this->hasMany(Course::class);
    }
}
