<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entreprise');
            $table->string('contact');
            $table->string('fonction');
            $table->string('civilite');
            $table->string('fax');            
            $table->string('mail')->unique();
            $table->string('web');
            $table->string('adresse');
            $table->string('ville');
            $table->string('cp');
            $table->string('mobile');
            $table->string('fix');
            $table->boolean('surveillance')->default(false);

             $table->integer('secteur_id')->unsigned();
            $table->foreign('secteur_id')->references('id')->on('secteurs');

             $table->integer('groupe_id')->unsigned();
            $table->foreign('groupe_id')->references('id')->on('groupes');

             $table->integer('alerte_id')->unsigned();
            $table->foreign('alerte_id')->references('id')->on('alertes');

             $table->integer('qualite_relation_id')->unsigned();
            $table->foreign('qualite_relation_id')->references('id')->on('qualite_relations');

             $table->integer('etat_relation_id')->unsigned();
            $table->foreign('etat_relation_id')->references('id')->on('etat_relations');

             $table->integer('pays_id')->unsigned();
            $table->foreign('pays_id')->references('id')->on('pays');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
