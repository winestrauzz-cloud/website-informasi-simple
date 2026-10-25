<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan kolom-kolom diisi melalui form/create
    protected $fillable = [
        'name',
        'department',
        'phone',
    ];
}