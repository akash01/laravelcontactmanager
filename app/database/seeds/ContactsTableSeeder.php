<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('contacts')->truncate();

		$contacts = array(
			[
				'first_name' => 'Lohan',
				'last_name' => 'Disk',
				'phone_number' => '010443023',
				'email_address' => 'lohan@disk.com',
				'description' => 'This is me.'
			],
			[
				'first_name' => 'Sandra',
				'last_name' => 'Vesi',
				'phone_number' => '040443023',
				'email_address' => 'sandra@vesi.com',
				'description' => 'This is sandra.'
			],
			[
				'first_name' => 'Peneop',
				'last_name' => 'Cruz',
				'phone_number' => '050443023',
				'email_address' => 'penep@cruz.com',
				'description' => 'This is peneop.'
			]
		);

		// Uncomment the below to run the seeder
		DB::table('contacts')->insert($contacts);
	}

}
