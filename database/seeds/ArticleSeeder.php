<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     //    DB::table('articles')->delete();

	    // for ($i=0; $i < 10; $i++) {
	    //     \App\Article::create([
	    //         'title'   => 'Title '.$i,
	    //         'body'    => 'Body '.$i,
	    //         'user_id' => 1,
	    //         'like'    => 0,
	    //         'draft'   => true
	    //     ]);
	    // }


	    // DB::table('articles')->insert([
     //        'title'   => 'Title '.str_random(10),
     //        'body'    => 'Body '.str_random(10),
     //        'user_id' => 1,
     //        'like'    => 0,
     //        'draft'   => true
     //    ]);

    	// factory(App\Article::class, 50)->create()->each(function ($u) {
	    //     $u->posts()->save(factory(App\Article::class)->make());
	    // });
	    factory(App\Article::class, 50)->create();

    }
}
