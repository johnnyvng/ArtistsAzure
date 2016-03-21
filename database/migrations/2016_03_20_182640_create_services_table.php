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
            $table->increments('serviceID');
            $table->integer('categoryID')->unsigned()->nullable();
            $table->string('name', 50);
            $table->text('description');
            $table->float('price');         
        });

        /*Schema::table('services', function (Blueprint $table) {
            //
            $table->integer('categoryID')->unsigned();
            
            $table->foreign('categoryID')
            ->references('categoryID')
            ->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });*/

        /*Schema::table('services', function (Blueprint $table) {
            //
            
            $table->dropColumn('categoryID');

        });      
*/
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
