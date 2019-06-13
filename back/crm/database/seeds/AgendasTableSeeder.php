<?php

use Illuminate\Database\Seeder;

class AgendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'libelle' => 'reunion',
            'date'=> '2019/02/01',
            'heure'=> '13:00',           
            'note'=> 'ne pas oublier',
            'contact_id'=>1
                ]);

                DB::table('agendas')->insert([
                    'libelle' => 'reunion01',
                    'date'=> '2019/02/02',
                    'heure'=> '14:00',                    
                    'note'=> ' oublier pas',
                    'contact_id'=>1
                        ]);
    }
}
