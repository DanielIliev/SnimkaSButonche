<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tenant_id')->unsigned();
            $table->integer('property_id')->unsigned();
            $table->date('when');
            $table->time('at');

            $table
                ->foreign(array('tenant_id'))
                ->references(array('id'))
                ->on('tenants');
            $table
                ->foreign(array('user_id'))
                ->references(array('id'))
                ->on('users');
            $table
                ->foreign(array('property_id'))
                ->references(array('id'))
                ->on('properties');


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
        Schema::drop('tours');
    }
}
