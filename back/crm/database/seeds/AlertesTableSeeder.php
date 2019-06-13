<?php

use Illuminate\Database\Seeder;

class AlertesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {              
            DB::table('alertes')->insert([
            'libelle' => 'attention',
            'date'=> '2019/02/01',
            'heure'=> '13:00'
                ]);

             DB::table('alertes')->insert([
            'libelle' => 'Wake up',
            'date'=> '2019/03/02',
            'heure'=> '14:00'
                 ]);
    }
}
