<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional, default is lowercase model name plural)
    protected $table = 'announcements';

    // Define the fillable attributes (columns that can be mass-assigned)
    protected $fillable = [
        'author',
        'body',
    ];

    // Optionally, if you are not using timestamps, set this to false
    public $timestamps = true;
}
