<?php

use Illuminate\Database\Seeder;

class EtapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etapes')->insert([
            'etape' => 'etape01',
            'affectation'=>'jean' ,
            'projet_id'=>1           
                ]);

                DB::table('etapes')->insert([
                    'etape' => 'etape02',
                    'affectation'=>'luc' , 
                    'projet_id'=>2          
                        ]);
    }
}
