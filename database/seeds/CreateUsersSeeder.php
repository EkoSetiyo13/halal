<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin 1',
                'email' => 'admin@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ],
            [
                'name' => 'Admin 3',
                'email' => 'admin3@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ],
            [
                'name' => 'Admin 4',
                'email' => 'admin4@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ],
            [
                'name' => 'Admin 5',
                'email' => 'admin5@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}