<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatamu extends Model
{
    use HasFactory;

    protected $lable = "datatamus";
    protected $fillable = ['nama', 'telepon', 'alamat', 'kepentingan', 'tanggal_bertamu'];
}
