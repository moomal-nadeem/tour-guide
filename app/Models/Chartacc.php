<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chartacc extends Model
{
    use HasFactory;
    protected $table = 'chartacc';
    protected $fillable = [
        'ChartName',
        'Type',
        'Status',
        'Trid',
    ];
}

