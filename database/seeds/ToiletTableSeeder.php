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
            'name' => 'AnneJan',
            'apikey' => 'jaeceifaexoonahsohgheCheiludaSeebaey2IiZaeCh1Zaph0aiveec4hohph3j'
        ]);
        Toilet::create([
            'name' => 'Rorry',
            'apikey' => 'eireek9yo8ig6mae9yahw7zohtaYoow2noh8xaija5oquooph6tei2kerahshai6'
        ]);
        Toilet::create([
            'name' => 'Christel',
            'apikey' => 'baegabiiree9inauchauN7quee2nu6Oe1loh9jeuh0shoh2ciloocichi0Ohk2zi'
        ]);
        Toilet::create([
            'name' => 'Marinus',
            'apikey' => 'yu8umaiw3jahquou9iereozaisaef3ijohqu8uw3ox4Hoe9co9thuThiePheigai'
        ]);
        Toilet::create([
            'name' => 'TBA1',
            'apikey' => 'oxaekooceegeeThohdoomoh5zae5quaiDuetoo6sahk9waib9iex2lee1deew1ai'
        ]);
        Toilet::create([
            'name' => 'TBA2',
            'apikey' => 'Feir7rohNgeeBae1ahwie8oro2thuo2Yohphe4ahth0thiu6Ee1Soh8haigoiphe'
        ]);
        Toilet::create([
            'name' => 'TBA3',
            'apikey' => 'ieTeeyietoo0uxahPa0iePooViegaegh0ub8ahquooshohqueethu1Ung6siap6u'
        ]);
        Toilet::create([
            'name' => 'TBA4',
            'apikey' => 'joroh7teisech8shahcoo9aishohnoogof8cueduim4aecee1baesheitaiR7jei'
        ]);
        Toilet::create([
            'name' => 'TBA5',
            'apikey' => 'poeng1Weichi0ahxoh6Nooghui2aesooB6AiNg4huix3osh3Imohwiexui7Aw9te'
        ]);
        Toilet::create([
            'name' => 'TBA6',
            'apikey' => 'la8ohghohghohzie7de1ieze2ailee8shoh0feejahngah5eeFephiehee7ohth5'
        ]);
        if (env('DB_CONNECTION') != 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
