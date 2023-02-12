<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $primaryKey = "Id";
    const CREATED_AT = 'CreationDateTime';
    const UPDATED_AT = 'EditDateTime';
}
