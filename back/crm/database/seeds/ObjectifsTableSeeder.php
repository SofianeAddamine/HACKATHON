<?php

use Illuminate\Database\Seeder;

class ObjectifsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objectifs')->insert([
            'objet' => 'depeche',
            'date'=>'2019-02-03',
            'note'=>'cour vite',
            'statut'=>1,
            'contact_id'=>1

                ]);

                DB::table('objectifs')->insert([
                    'objet' => 'depecherrrr',
                    'date'=>'2019-02-03',
                    'note'=>'cour vite chaud',
                    'statut'=>0,
                    'contact_id'=>1
        
                        ]);
    }
}
