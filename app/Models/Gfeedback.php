<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gfeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        // other columns...
        'name',
        'invoice',
        'img',
        'uID',
        'dID',
        'des',
    ];
}
