<?php

use Illuminate\Database\Seeder;
use App\Post;

class AddPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'ddjgfxmgfm 1';
        $post->text = 'esknlnnljjnljklzdfkldfbjkljklnkldg';
        $post->user_id = 0;
        $post->save();
    }
}
