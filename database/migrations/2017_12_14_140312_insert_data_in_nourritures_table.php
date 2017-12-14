<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataInNourrituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nourritures');
    }
}
