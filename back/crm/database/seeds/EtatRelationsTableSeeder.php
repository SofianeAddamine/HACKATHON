<?php

use Illuminate\Database\Seeder;

class EtatRelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etat_relations')->insert([
            'libelle' => 'fidèle',            
                ]);
        DB::table('etat_relations')->insert([
          'libelle' => 'infidèle',            
              ]);
              DB::table('etat_relations')->insert([
                'libelle' => 'decu',            
                    ]);  
                    
     DB::table('etat_relations')->insert([
               'libelle' => 'en essai',            
                   ]);   
    }
}
