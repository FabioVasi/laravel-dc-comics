<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DcComic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumb', 'description', 'price', 'series'];
}
