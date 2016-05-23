<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('properties');
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('city');
            $table->string('area');
            $table->string('address');
            $table->double('rent',8,2)->unsigned();
            $table->boolean('available');
            $table->text('description');

            $table
                ->foreign(array('owner_id'))
                ->references(array('id'))
                ->on('owners');

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
        Schema::drop('properties');
    }
}
