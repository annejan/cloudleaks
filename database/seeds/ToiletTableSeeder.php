<?php

use Illuminate\Database\Seeder;
use App\Toilet;
use Illuminate\Database\Eloquent\Model;

class ToiletTableSeeder extends Seeder
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
        DB::table('toilets')->truncate();
        Toilet::create([
            'name' => 'Ons eerste Toilet',
            'apikey' => 'jaeceifaexoonahsohgheCheiludaSeebaey2IiZaeCh1Zaph0aiveec4hohph3j'
        ]);
        if (env('DB_CONNECTION') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
