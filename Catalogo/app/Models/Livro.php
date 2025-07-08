<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'editora',
        'ano',
        'status',
        'user_id',
        'imagem',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
