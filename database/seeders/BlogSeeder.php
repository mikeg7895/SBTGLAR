<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);
        $blog = Blog::create([
            'titulo' => 'Prueba',
            'subdescripcion' => 'Esto es una subdescripcion',
            'descripcion' => 'Estamos haciendo una peurba tecnica. Esto es una descripcion',
            'user_id' => $user->id,
        ]);
    }
}
