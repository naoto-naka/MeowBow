<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 1;$i <= 10;$i++) {
           Comment::create([
             'user_id'    => 1,
             'tweet_id'   => $i,
             'content'    => 'テストコメント'.$i,
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
           ]);
       }
    }
}
