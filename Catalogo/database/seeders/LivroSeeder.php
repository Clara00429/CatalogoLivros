<?php

namespace Database\Seeders;

use App\Models\Livro;
use App\Models\User;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if ($user) {
            Livro::factory()->count(10)->create([
                'user_id' => $user->id,
                'status' => 'quero ler',
            ]);
        }
    }
}
