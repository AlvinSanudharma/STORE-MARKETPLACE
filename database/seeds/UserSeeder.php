<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@store.com',
                'password' => bcrypt('rahasia'),
                'roles' => 'ADMIN',
                'store_name' => null,
                'categories_id' => null,
                'store_status' => null,
                'adddress_one' => 'Jalan Laksamana',
                'adddress_two' => 'Jalan Sekar Tunjung',
                'provinces_id' => 51,
                'regencies_id' => 5171,
                'zip_code' => 80232,
                'country' => 'Indonesia',
                'phone_number' => '+628199972918'
            ],
            [
                'name' => 'Alvin Sanudharma',
                'email' => 'alvin@store.com',
                'password' => bcrypt('rahasia'),
                'roles' => 'USER',
                'store_name' => null,
                'categories_id' => null,
                'store_status' => null,
                'adddress_one' => 'Jalan Sekar Tunjung',
                'adddress_two' => 'Jalan Sekar Laksamana',
                'provinces_id' => 51,
                'regencies_id' => 5171,
                'zip_code' => 80232,
                'country' => 'Indonesia',
                'phone_number' => '+6281805503686'
            ],
        ];

        User::insert($users);
    }
}
