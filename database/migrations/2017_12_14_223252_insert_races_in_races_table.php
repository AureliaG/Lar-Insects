<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertRacesInRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::table('races')->delete();

         DB::table('races')->insert(array(
            array(
            'race' => 'Culicidés'
            ),
            array(
            'race' => 'Lépidoptères'
            ),
            array(
            'race' => 'coléoptères'
            ),
            array(
            'race' => 'Scarabaeoidea'
            ),
            array(
            'race' => 'vespinées'
            ),
            array(
            'race' => 'apoïdes'
            ),
            array(
            'race' => 'coléoptères'
            ),
            array(
            'race' => 'brachycères'
            ),
            array(
            'race' => 'orthoptère'
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
        Schema::dropIfExists('races');
    }
}
