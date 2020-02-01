<?php

use Illuminate\Database\Seeder;

class HaikuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phrases')->insert([
            "text" => "La nuit est tombée",
        ]);
        DB::table('phrasems')->insert([
            "text" => "le sol est gris",
        ]);
        DB::table('phrasefs')->insert([
            "text" => "Renaud !",
        ]);


    }
}
