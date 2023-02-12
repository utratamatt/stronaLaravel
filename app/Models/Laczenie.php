<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laczenie extends Model
{
    use HasFactory;

    protected $table = "laczenie";
    protected $primaryKey = "Id";
    public $timestamps = false;
	
}
