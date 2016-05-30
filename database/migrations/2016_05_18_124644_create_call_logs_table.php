<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('holder_id')->unsigned();
            $table->enum('owner_or_tenant',['owner','tenant']);
            $table->integer('property_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('reply');

            $table
                ->foreign(array('property_id'))
                ->references(array('id'))
                ->on('properties');
            $table
                ->foreign(array('user_id'))
                ->references(array('id'))
                ->on('users');
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
        Schema::drop('call_logs');
    }
}
