<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceProducer extends Model
{
    protected $fillable = [
        'performance_id',
        'producer_id',
    ];
}
