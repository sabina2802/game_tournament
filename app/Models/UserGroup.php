<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserGroup extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'user_groups';

    protected $fillable = [
        'id',
        'user_name',
        'name',
        'winner_name',
    ];
}
