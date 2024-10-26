<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'deskripsi', 'foto'];
    public $timestamps = true;
}