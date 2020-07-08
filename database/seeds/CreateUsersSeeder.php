<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
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
               'name'=>'Admin',
               'email'=>'admin@halal.com',
                'is_admin'=>'1',
                'is_member'=>'0',
                'nama_role'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@halal.com',
                'is_admin'=>'0',
                'is_member'=>'1',
                'nama_role'=>'penyuplai',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Penerima',
                'email'=>'penerima@halal.com',
                 'is_admin'=>'0',
                 'is_member'=>'1',
                 'nama_role'=>'penerima',
                'password'=> bcrypt('123456'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}