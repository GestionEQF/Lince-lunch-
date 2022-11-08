<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numcontrol extends Model
{
    use HasFactory;

    protected $table = 'numcontrol';

    protected $fillable = [
        'numcontrol',
        'vigente'
    ];
}
