<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'project',
        'language',
        'uID',
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'uID', 'id');
    }

 
}
