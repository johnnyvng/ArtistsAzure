<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDavepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('davepages', function (Blueprint $table) {
                    $table->increments('id');
                    $table->timestamps();
                    $table->string('page_label', 64);
                    $table->string('headline', 255)->nullable();
                    $table->text('body')->nullable();
                    
                    //
                });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('davepages');
    }
}
