<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
           /* $table->timestamps();*/
            $table->integer('categoryID')->unsigned()->nullable();
            $table->string('service_name', 256)->nullable();
            $table->text('service_content')->nullable();
            $table->text('discription')->nullable();
            $table->float('prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
