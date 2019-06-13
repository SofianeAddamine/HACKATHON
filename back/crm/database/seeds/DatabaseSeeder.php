<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AlertesTableSeeder::class);
        $this->call(EtatRelationsTableSeeder::class); 
        $this->call(GroupesTableSeeder::class);  
        $this->call(ProjetsTableSeeder::class);
        $this->call(QualiteRelationsTableSeeder::class);
        $this->call(SecteursTableSeeder::class);
        $this->call(TachesTableSeeder::class); 
        $this->call(ContactsTableSeeder::class);
        $this->call(AgendasTableSeeder::class); 
        $this->call(EtapesTableSeeder::class);  
        $this->call(ObjectifsTableSeeder::class);
    }
}
