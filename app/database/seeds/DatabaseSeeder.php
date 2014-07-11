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

		// $this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();

        $user = new User();
        $user->email = 'ashley@codeup.com';
        $user->password = Hash::make('adminPass123!');
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
            $posts->user_id = rand(1,2);
	        $posts->title = "Post: $i";
	        $posts->body = "Post $i body.";
            $posts->slug = $posts->title;
	        $posts->save();
    	}
    }

}
