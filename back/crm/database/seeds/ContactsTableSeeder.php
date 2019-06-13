<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Contacts')->insert([
            'entreprise' => str_random(10),
            'contact'=> str_random(10),
            'fonction'=> str_random(10),
            'civilite'=> 'homme',
            'fax'=>str_random(10),
            'mail'=>str_random(10).'@gmail.com',
            'web'=>str_random(10),
            'adresse'=>str_random(10),
            'ville'=>str_random(10),
            'cp'=>str_random(5),
            'mobile'=>str_random(10),           
            'fix'=>str_random(10),
            'surveillance'=>1,
            'secteur_id'=>1,
            'groupe_id'=>1,
            'alerte_id'=>1,
            'pays_id'=>73,

            'etat_relation_id'=>1,
            
            'qualite_relation_id'=>1

                ]);

             DB::table('contacts')->insert([
                'entreprise' => str_random(10),
                'contact'=> str_random(10),
                'fonction'=> str_random(10),
                'civilite'=> 'femme',
                'fax'=>str_random(10),
                'mail'=>str_random(10).'@gmail.com',
                'web'=>str_random(10),
                'adresse'=>str_random(10),
                'ville'=>str_random(10),
                'cp'=>str_random(5), 
                'mobile'=>str_random(10),           
            'fix'=>str_random(10),
                'surveillance'=>1,
            'secteur_id'=>2,
            'groupe_id'=>2,
            'alerte_id'=>2,
            'etat_relation_id'=>2,
            'pays_id'=>73,
            
            'qualite_relation_id'=>2
                 ]);
    }
}
