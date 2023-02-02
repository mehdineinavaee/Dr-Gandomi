<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusInformation extends Model
{
    use HasFactory;
    protected $fillable = ['about_our_campus', 'campus_facilities', 'other_campus_information'];
}
