<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert(
            [
                [
                    "nom" => "Konate",
                    "prenoms" => "soro",
                    "contact" => "0101010101",
                    "email" => "konate@gmail.com",
                    "password" => Hash::make('konate@gmail.com'),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                    "role_id" => 1,
                ],
                [
                    "nom" => "Bakayoko",
                    "prenoms" => "Sery",
                    "contact" => "0202020202",
                    "email" => "bakayoko@gmail.com",
                    "password" => Hash::make('bakayoko@gmail.com'),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                    "role_id" => 2,
                ],
                [
                    "nom" => "Koudou",
                    "prenoms" => "salif",
                    "contact" => "0303030303",
                    "email" => "koudou@gmail.com",
                    "password" => Hash::make('koudou@gmail.com'),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                    "role_id" => 3,
                ],
                [
                    "nom" => "Koffi",
                    "prenoms" => "Lazare",
                    "contact" => "0404040404",
                    "email" => "koffi@gmail.com",
                    "password" => Hash::make('koffi@gmail.com'),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                    "role_id" => 4,
                ],
            ]
        );
    }
}
