<?php

use Faker\Factory as Faker;

class LocalSeeder extends Seeder {

	public function __construct()
	{
		$this->faker = Faker::create();
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->seedUsers();
		$this->seedNews();
		$this->seedNewsCategories();
	}

	/**
	 *
	 */
	protected function now()
	{
		return date('Y-m-d');
	}

	public function seedNews($count = 10)
	{
		$faker = $this->faker;
		$db = DB::table('news');
		$db->delete();

		foreach(range(1, $count) as $index)
		{
			$db->insert([
				'id'			=> $index,
				'user_id'		=> floor($index % 3) + 1,
				'category_id'	=> floor($index % 3) + 1,
				'title'			=> $faker->sentence(floor($index % 3) + 1),
				'content'		=> $faker->paragraph(3),
				'preview'		=> $faker->text(150),
				'created_at'	=> $this->now(),
				'updated_at'	=> $this->now()
			]);
		}
	}

	public function seedNewsCategories($count = 3)
	{
		$faker = $this->faker;
		$db = DB::table('news_categories');
		$db->delete();

		$categories = ['News', 'Feature', 'Opinion'];

		foreach(range(1, $count) as $index)
		{
			$db->insert([
				'id'			=> $index,
				'name'			=> $categories[$index - 1],
				'created_at'	=> $this->now(),
				'updated_at'	=> $this->now()
			]);
		}
	}

	public function seedUsers($count = 3)
	{
		$faker = $this->faker;
		$db = DB::table('users');
		$db->delete();

		foreach(range(1, $count) as $index)
		{
			$db->insert([
				'id'			=> $index,
				'username'		=> $faker->username,
				'password'		=> Hash::make('1234'),
				'created_at'	=> $this->now(),
				'updated_at'	=> $this->now()
			]);
		}
	}

}
