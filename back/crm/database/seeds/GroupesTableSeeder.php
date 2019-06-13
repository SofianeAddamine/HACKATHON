<?php

use Illuminate\Database\Seeder;

class GroupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupes')->insert([
            'libelle' => 'client',            
                ]);

          DB::table('groupes')->insert([
            'libelle' => 'prospect',            
                 ]);
         DB::table('groupes')->insert([
                  'libelle' => 'demo',            
                    ]);
      
                    

            
    }
}
