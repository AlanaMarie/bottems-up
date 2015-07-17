<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        App\Drink::create(['name' => 'Duvel', 'category' => 'beer']);
        App\Drink::create(['name' => 'La Chouffe', 'category' => 'beer']);
        App\Drink::create(['name' => 'Brugse Zot', 'category' => 'beer']);
        App\Drink::create(['name' => 'Grimbergen Tripel', 'category' => 'beer']);
        App\Drink::create(['name' => 'Westmalle Tripel', 'category' => 'beer']);
        App\Drink::create(['name' => 'Kriek', 'category' => 'beer']);
        App\Drink::create(['name' => 'Rodenbach', 'category' => 'beer']);
        App\Drink::create(['name' => 'Koninck', 'category' => 'beer']);
        App\Drink::create(['name' => 'Jupiler', 'category' => 'beer']);
        App\Drink::create(['name' => 'Maes', 'category' => 'beer']);
        App\Drink::create(['name' => 'Stella', 'category' => 'beer']);
        App\Drink::create(['name' => 'Orval', 'category' => 'beer']);
        App\Drink::create(['name' => 'Gentse Strop', 'category' => 'beer']);
        App\Drink::create(['name' => 'Gruut Blond', 'category' => 'beer']);
        App\Drink::create(['name' => 'Cara Pils', 'category' => 'beer']);
        App\Drink::create(['name' => 'Cuvée des Trolls', 'category' => 'beer']);
        App\Drink::create(['name' => 'Gulden Draak', 'category' => 'beer']);
        App\Drink::create(['name' => 'Hoegaarden', 'category' => 'beer']);
        App\Drink::create(['name' => 'Leffe Blond', 'category' => 'beer']);
        App\Drink::create(['name' => 'Leffe Bruin', 'category' => 'beer']);
        App\Drink::create(['name' => 'Malheur 10', 'category' => 'beer']);
        App\Drink::create(['name' => 'Delirium', 'category' => 'beer']);
        App\Drink::create(['name' => 'Pauwel Kwak', 'category' => 'beer']);
        App\Drink::create(['name' => 'Primus', 'category' => 'beer']);
        App\Drink::create(['name' => 'Rocherfort 8', 'category' => 'beer']);
        App\Drink::create(['name' => 'St. Bernardus Abt 12', 'category' => 'beer']);
        App\Drink::create(['name' => 'Tongerlo Blond', 'category' => 'beer']);
        App\Drink::create(['name' => 'Tongerlo Bruin', 'category' => 'beer']);
        App\Drink::create(['name' => 'Vicaris Generaal', 'category' => 'beer']);

        Model::reguard();
    }
}
