<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Comment la Transition Énergétique Redéfinit les Marchés Globaux',
            'content' => 'La transition énergétique redéfinit les marchés mondiaux en favorisant les énergies renouvelables, modifiant les équilibres économiques et créant de nouvelles opportunités tout en défiant les secteurs traditionnels.',
            'image' => 'https://plus.unsplash.com/premium_photo-1678743133487-d501f3b0696b?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Post::create([
            'title' => 'Le Gaz dans le Contexte Géopolitique',
            'content' => 'Le gaz naturel est au cœur des tensions géopolitiques, influençant les relations internationales et les stratégies énergétiques, notamment avec la dépendance de l\'Europe au gaz russe et la montée du GNL.',
            'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);

        Post::create([
            'title' => 'L\'Économie de l\'Énergie : Défis et Opportunités dans un Monde en Mutation',
            'content' => 'L\'économie de l\'énergie fait face à des défis liés à la transition vers des sources durables, tout en créant des opportunités d\'innovation et d\'investissement dans les énergies renouvelables et les technologies propres.',
            'image' => 'https://plus.unsplash.com/premium_photo-1679917152411-353fd633e218?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]);
    }
}
