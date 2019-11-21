
<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        $first_post = new Post();
        $first_post->user_id = 1;
        $first_post->title = "Post1";
        $first_post->body = " Description of Post1";
        $first_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post2";
        $second_post->body = " Description of Post 2";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post3";
        $second_post->body = " Description of Post 3";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post4";
        $second_post->body = " Description of Post 4";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post5";
        $second_post->body = " Description of Post 5";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post6";
        $second_post->body = " Description of Post 6";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post7";
        $second_post->body = " Description of Post 7";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post8";
        $second_post->body = " Description of Post 8";
        $second_post->save();

        $second_post = new Post();
        $second_post->user_id = 1;
        $second_post->title = "Post9";
        $second_post->body = " Description of Post 9";
        $second_post->save();
    }
}