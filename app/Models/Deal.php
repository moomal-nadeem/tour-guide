<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    // Deal.php (or your model name)
protected $fillable = [
    // other columns...
    'allowStatus',
];

public function user()
    {
        return $this->belongsTo(User::class, 'uID', 'id');
    }

    
}
