<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory; // เพิ่มบรรทัดนี้

    protected $fillable = [
        'title',
        'content',
        'status',
    ];
}
