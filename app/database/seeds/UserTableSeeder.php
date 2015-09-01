<?php
class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$user = new User;
		$user->first_name='Amanda';
		$user->last_name='Ortiz';
		$user->email='manda@yahoo.com';
		$user->password='password';
		$user->save();


	}
}