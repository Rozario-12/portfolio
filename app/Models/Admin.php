<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
class Admin extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
    ];
}
