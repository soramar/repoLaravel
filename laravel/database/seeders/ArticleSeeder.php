<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'testTitle01',
            'content' => 'testContent01',
            'user_id' => 1
        ]);
        Article::create([
            'title' => 'testTitle02',
            'content' => 'testContent02',
            'user_id' => 2
        ]);
        Article::create([
            'title' => 'testTitle03',
            'content' => 'testContent03',
            'user_id' => 4
        ]);
    }
}
