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
        Model::unguard();
        if (env('DB_CONNECTION') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        DB::table('users')->truncate();
        User::create([
            'name' => 'Anne Jan',
            'email' => 'brouwer@annejan.com',
            'password' => Hash::make('mo6tah8I')
        ]);
        if (env('DB_CONNECTION') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
