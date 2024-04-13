<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateursmodel extends Model
{
    use HasFactory;
    protected $table = 'utilisateurs';
    protected $fillable =[
        'nom',
        'prenom',
        'email',
        'role',
        'etat',
    ];
}
