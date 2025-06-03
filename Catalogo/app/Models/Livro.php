<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livro';

    protected $fillable = [
        'titulo',
        'autor',
        'ano_publicacao',
        'editora',
        'isbn',
        'categoria',
        'status', 
        'paginas'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'livro_user')->withPivot('status')->withTimestamps();
    }
}
