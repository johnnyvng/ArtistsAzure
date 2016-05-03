<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('images', function (Blueprint $table) {
           /* $table->increments('id');
            $table->timestamps();
            $table->string('image_name', 256)->nullable();
            $table->string('image_title', 256)->nullable();
            $table->text('image_description')->nullable();
            $table->string('image_path')->nullable();
            $table->integer('gallery_id')->unsigned();

            $table->foreign('gallery_id')
                ->references('id')->on('galleries')
                ->onUpdate('cascade')->onDelete('cascade');*/

                // This for gallery on Amitav Roy
            // $table->increments('id');
            // $table->timestamps();
            // $table->integer('gallery_id')->unsigned();
            // $table->string('image_name');
            // $table->string('image_size', 10);
            // $table->string('image_mime', 50);
            // $table->string('image_path');
            // $table->integer('created_by');

            $table->increments('id');
            $table->timestamps();
            $table->string('name', 256);
            $table->string('filename', 256);
            $table->integer('gallery_id')->unsigned();
            $table->integer('service_id')->unsigned()->nullable();      

            $table->foreign('gallery_id') 
                ->references('id')->on('galleries') 
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('service_id') 
                ->references('id')->on('services') 
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
        /*Schema::table('images', function (Blueprint $table) {
            //
            $table->dropForeign('images_gallery_id_foreign');
            $table->dropColumn('gallery_id');
        });*/

        Schema::drop('images');

    }
}
