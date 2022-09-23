<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "Owner Kamyusi",
				"email" => "ownerkamyusi@gmail.com",
				"phone_no" => "088212743660",
				"role" => "owner",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			],
			[
				"name" => "Karyawan Kamyusi",
				"email" => "karyawankamyusi@gmail.com",
				"phone_no" => "088212743661",
				"role" => "karyawan",
				"password" => password_hash("12345678", PASSWORD_DEFAULT)
			]
		]);
	}
}
