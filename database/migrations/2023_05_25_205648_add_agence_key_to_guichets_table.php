<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgenceKeyToGuichetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guichets', function (Blueprint $table) {
            //
            $table->foreignId('agence_regional_id')->nullable()->references('id')->on('agence_regionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guichets', function (Blueprint $table) {
            //
            Schema::dropColumns("guichets", "agence_regional_id");
        });
    }
}
