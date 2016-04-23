<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'Anne Jan',
            'email' => 'brouwer@annejan.com',
            'password' => Hash::make('mo6tah8I')
        ]);
    }
}
