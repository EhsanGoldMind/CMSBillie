<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u=Category::all();
      $post1=Post::create([
          'title'=>'This is just test',
          'description'=>'What is Lorem Ipsum?',
          'content'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
          	'image'=>'https://www.hdcarwallpapers.com/walls/2021_mclaren_765lt_5k_5-HD.jpg',
          	'category_id'=>$u->random(),
          	'user_id'=>1,
          	'published_at'=>2021/03/04,
      ]);
    }
}
