<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->char('reference', 11);
            $table->string('address', 150);
            $table->char('postal_code', 5);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->smallInteger('square_meters');
            $table->tinyInteger('rooms');
            $table->tinyInteger('bathrooms');
            $table->string('type', 20);
            $table->text('description');
            $table->mediumInteger('price');
            $table->boolean('is_available');
            $table->string('energy_rating', 5);

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
        Schema::dropIfExists('houses');
    }
};
