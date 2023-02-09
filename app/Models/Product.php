<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Translator;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['cover', 'title', 'price', 'discount', 'total', 'new', 'edition', 'description'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function translators()
    {
        return $this->belongsToMany(Translator::class)->withTimestamps();
    }
}
