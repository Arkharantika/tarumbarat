<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawGPA extends Model
{
    use HasFactory;
    protected $table = 'trs_raw_d_gpa';

    protected $guarded = [];
}
