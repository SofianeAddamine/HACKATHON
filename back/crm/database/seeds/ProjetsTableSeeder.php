<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            'nom' => str_random(10),
            'date_debut'=>'2019-02-03',
            'date_fin'=>'2019-02-05'

                ]);


                DB::table('projets')->insert([
                    'nom' => str_random(10),
                    'date_debut'=>'2019-04-03',
                    'date_fin'=>'2019-04-05'
        
                        ]);
    }
}
