<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programmes')->insert([
            [
                'libelle_programme' => 'Plomberie',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle_programme' => 'AGIR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle_programme' => 'THIMO',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle_programme' => 'Permis de conduire',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
