<?php

use Illuminate\Database\Seeder;

class NourrituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('nourritures')->delete();

         DB::table('nourritures')->insert(array(
            array(
            'nourriture' => 'Pucerons'
            ),
            array(
            'nourriture' => 'Plante'
            ),
            array(
            'nourriture' => 'Herbe'
            ),
            array(
            'nourriture' => 'Maïs'
            ),
            array(
            'nourriture' => 'Moucherons'
            )
          ));
    }
}
