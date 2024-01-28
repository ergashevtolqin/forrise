<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'question',
        'answer',
    ];

    public function count()
    {
        return $this->hasOne(CountModul::class,'modul_id','id');
    }
}
