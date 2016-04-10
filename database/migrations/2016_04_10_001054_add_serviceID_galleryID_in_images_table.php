<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceIDGalleryIDInImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            //
             $table->foreign('serviceID')
            ->references('id')
            ->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('galleryID')
            ->references('id')
            ->on('galleries')
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
        Schema::table('images', function (Blueprint $table) {
            //
            $table->dropForeign('images_serviceID_foreign');
            $table->dropForeign('images_galleryID_foreign');
            $table->dropColumn('serviceID');
            $table->dropColumn('galleryID');
        });
    }
}
