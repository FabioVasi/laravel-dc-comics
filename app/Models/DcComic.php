<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DcComic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'thumb', 'description', 'price', 'series'];
}
