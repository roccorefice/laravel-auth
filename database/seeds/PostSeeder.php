<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);
            $newPost->body = $faker->text(100);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->save();


        }
    }
}
