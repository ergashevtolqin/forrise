<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountModul extends Model
{
    use HasFactory;

    protected $fillable = [
        'modul_id',
        'no',
        'yes',
    ];
}
