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
            $table->increments('id')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->unique()->nullable();
            $table->decimal('age')->nullable();
            $table->string('famille',200)->nullable();
            $table->string('race',200)->nullable();
            $table->string('nourriture',250)->nullable();
            $table->timestamps();
            $table->integer('user_id')->nullable();
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
