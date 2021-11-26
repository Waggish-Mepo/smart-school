<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    const ADMIN = 'ADMIN';
    const STUDENT = 'STUDENT';
    const TEACHER = 'TEACHER';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'subjects',
        'created_at',
        'update_at',
    ];
}
