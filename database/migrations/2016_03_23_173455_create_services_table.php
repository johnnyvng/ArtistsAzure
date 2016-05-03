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
            $table->timestamps();
            $table->string ('service_name', 255)->unique();
            $table->text('service_content')->nullable();
            $table->text('description')->nullable();
            $table->float('prices')->nullable();
            $table->integer('category_id')->unsigned();
            
            $table->foreign('category_id') 
                ->references('id')->on('categories') 
                ->onUpdate('cascade')->onDelete('cascade');

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
