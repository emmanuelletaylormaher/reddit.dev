<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 11 ; $i++) { 
            $post = new App\Models\Post();
            $post->title = "Test";
            $post->url = "http://bomb.com";
            $post->content = "Cahf ah nafl mglw'nafh hh' ahor syha'h ah'legeth, ng llll or'azath syha'hnahh n'ghftephai n'gha ahornah ah'mglw'nafh";
            $post->created_by = $i;
            $post->save();
        }
        
    }
}