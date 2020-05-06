<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <= 10; $i++) {
        User::create([
          'screen_name'    => 'test_user'.$i,
          'name'           => 'Test'.$i,
          'profile_image'  => 'e_others_500',
          'email'          => 'test'.$i.'@test.com',
          'password'       => Hash::make('1234567'),
          'remember_token' => str_random(10),
          'created_at'     => Carbon::now(),
          'updated_at'     => Carbon::now(),
        ]);
      }
    }
}
