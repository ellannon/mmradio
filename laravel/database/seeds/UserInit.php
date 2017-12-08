<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserInit extends Seeder
{
	use RegistersUsers;

    public function run()
    {
		DB::table('users')->insert([
            'name' => 'MMRadio',
            'email' => 'marcc@bymotto.com',
            'password' => bcrypt('202crea212')
		]);

		DB::table('roles')->insert([
			['name' => 'Superadmin'],
			['name' => 'Admin'],
			['name' => 'User']
		]);

		DB::table('role_users')->insert([
			'role_id' => 1,
			'user_id' => 1
		]);
    }
}
