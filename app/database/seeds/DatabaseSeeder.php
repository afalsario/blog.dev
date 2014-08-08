<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        for($i = 1; $i <= 10; $i++)
        {
	        $posts = new Post();
            $posts->user_id = 1;
	        $posts->title = "Post: $i";
	        $posts->body = "Post $i body.";
            $posts->slug = $posts->title;
	        $posts->save();
    	}
    }

}
