<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumusRatingCurve extends Model
{
    use HasFactory;
    protected $table = 'rumus_rating_curve';

    protected $guarded = [];
}
