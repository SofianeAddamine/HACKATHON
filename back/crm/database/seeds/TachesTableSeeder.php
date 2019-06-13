<?php

use Illuminate\Database\Seeder;

class TachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taches')->insert([
            'libelle' => 'aller labas',
            'date_debut'=>'2019-02-01',
            'date_limite'=>'2019-04-01',
            'affectation'=>'aaaa',
            'note'=>'revoir la famille',
            'urgence'=>1

                 ]);
         DB::table('taches')->insert([
                    'libelle' => 'venir ',
                    'date_debut'=>'2019-02-01',
                    'date_limite'=>'2019-04-01',
                    'affectation'=>'bbbb',
                    'note'=>'revoir le code',
                    'urgence'=>0
        
                         ]);            
    }        
}
