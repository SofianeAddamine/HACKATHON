<?php

use Illuminate\Database\Seeder;

class QualiteRelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualite_relations')->insert([
            'libelle' => 'neutre',            
                ]);
        DB::table('qualite_relations')->insert([
        'libelle' => 'bonne',            
            ]);
            DB::table('qualite_relations')->insert([
                'libelle' => 'mauvaise',            
                    ]);            
    }
}
