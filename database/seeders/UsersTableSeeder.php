<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Rajeev Bohara',
          'email' => 'rajeevbohara237@gmail.com',
          'password' => bcrypt('rajeev123'),
          'admin' => 1
        ]);

        Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/',
          'about' => 'Hello, this is me!',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
