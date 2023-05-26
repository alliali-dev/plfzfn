<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgrammeKeyToDemandeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demandeurs', function (Blueprint $table) {
            //
            $table->foreignId('programme_id')->nullable()->references('id')->on('programmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demandeurs', function (Blueprint $table) {
            //
            Schema::dropColumns("demandeurs", "programme_id");
        });
    }
}
