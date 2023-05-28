<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandeurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string("prenoms")->nullable();
            $table->string("sexe_demandeur", 15)->nullable();
            $table->date("date_naiss_demandeur")->nullable();
            $table->string("lieu_naiss_demandeur")->nullable();
            $table->string("sp_lieu_naiss_demandeur")->nullable();
            $table->string("handicap_demandeur")->nullable();
            $table->string("type_handicap_demandeur")->nullable();
            $table->string("nationalite_demandeur")->nullable();
            $table->string("piece_demandeur")->nullable();
            $table->string("nature_piece_demandeur")->nullable();
            $table->string("numero_piece")->nullable();
            $table->string("contact1_demandeur")->nullable();
            $table->string("contact2_demandeur")->nullable();
            $table->string("pers_contact_urgent")->nullable();
            $table->string("contact_pers")->nullable();
            $table->string("lieu_rh_demandeur")->nullable();
            $table->string("sp_lieu_demandeur")->nullable();
            $table->string("nivetude_demandeur")->nullable();
            $table->string("diplome_demandeur")->nullable();
            $table->string("specialite_demandeur")->nullable();
            $table->string("annee_diplo_demandeur")->nullable();
            $table->string("occup_actu_demandeur")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandeurs');
    }
}
