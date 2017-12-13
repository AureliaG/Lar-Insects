<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->decimal('age');
            $table->string('famille',200);
            $table->string('race',200);
            $table->string('nourriture',250);
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
        Schema::dropIfExists('models_descriptions');
    }
}
