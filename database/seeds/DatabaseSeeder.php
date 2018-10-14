<?php

use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Education::create([
            'level' => 'Inžinier',
            'field' => 'dboru Softvérové inžinierstvo',
            'school' => 'Fakulta elektrotechnická, České vysoké učení technické v Prahe',
            'started_at' => '2016-09-01',
            'finished_at' => '2018-06-20',
            'description' => 'Diplomová práca na tému: Podpora vyučovania programovania na školách'
        ]);

        Education::create([
            'level' => 'Bakalár',
            'field' => 'odboru Počítačové systémy',
            'school' => 'České vysoké učení technické v Prahe',
            'started_at' => '2012-09-01',
            'finished_at' => '2016-02-20',
            'description' => 'Bakalárska práca na tému: Integrácia IEC61499 s OPC UA'
        ]);

        Education::create([
            'level' => 'Maturita',
            'field' => 'v odbore Počítačové systémy',
            'school' => 'Stredná Priemyselná Škola Elektrotechnická v Prešove',
            'started_at' => '2008-09-01',
            'finished_at' => '2012-05-30',
            'description' => 'Maturitná práca: Autonómna solárna elektráreň'
        ]);
    }
}
