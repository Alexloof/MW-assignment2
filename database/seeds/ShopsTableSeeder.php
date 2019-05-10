<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                "name" => "Elgiganten",
                "city" => "Lund"
            ],
            [
                "name" => "Media Markt",
                "city" => "Malmö"
            ],
            [
                "name" => "Expert",
                "city" => "Staffanstorp"
            ],
            [
                "name" => "Siba",
                "city" => "Helsingborg"
            ]
        ]);
    }
}
