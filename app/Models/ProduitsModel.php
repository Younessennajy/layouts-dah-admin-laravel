<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitsModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prix',
        'qantité',
        'image',
    ];
}
