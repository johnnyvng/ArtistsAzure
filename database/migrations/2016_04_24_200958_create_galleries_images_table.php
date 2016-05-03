<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_ID')->unsigned()->nullable();
            $table->integer('file_ID')->unsigned()->nullable();

            $table->foreign('gallery_ID')
            ->references('id')
            ->on('galleries')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('file_ID')
            ->references('id')
            ->on('files')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('galleries_images', function(Blueprint $table) {
        //     $table->dropForeign('galleries_images_gallery_ID_foreign');
        //     $table->dropColumn('gallery_ID');

        //     $table->dropForeign('galleries_images_file_ID_foreign');
        //     $table->dropColumn('file_ID');
        // });
        
        Schema::drop('galleries_images');
    }
}
