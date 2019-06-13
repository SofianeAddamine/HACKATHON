<?php

use Illuminate\Database\Seeder;

class SecteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secteurs')->insert([
            'libelle' => 'secteur nord',            
                ]);
        DB::table('secteurs')->insert([
           'libelle' => 'secteur sud ',            
                ]);
        
         DB::table('secteurs')->insert([
               'libelle' => 'secteur est ',            
                    ]);        
                    
        DB::table('secteurs')->insert([
            'libelle' => 'secteur ouest',            
                 ]);
    }
}
