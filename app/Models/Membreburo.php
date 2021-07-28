<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membreburo extends Model
{
    use HasFactory;

    protected $fillable = ['membre_id','buro_id','poste_id'];
}
