<?php

use Illuminate\Database\Seeder;
use App\User;

class SuperAdminSeeder extends Seeder
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
                'name' => 'Super Admin',
                'email' => 'superadmin@halal.its.ac.id',
                'is_admin' => '1',
                'is_member' => '0',
                'nama_role' => 'admin',
                'password' => bcrypt('h4l4l1ts'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
