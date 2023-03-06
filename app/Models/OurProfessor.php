<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class OurProfessor extends Model
{
    use HasFactory;
    protected $fillable = ['cover', 'full_name', 'post', 'twitter', 'linkedin', 'instagram', 'facebook'];

    public function supervisors()
    {
        return $this->hasMany(Event::class);
    }

    public function advisors()
    {
        return $this->hasMany(Event::class);
    }

    public function referees()
    {
        return $this->hasMany(Event::class);
    }
}
