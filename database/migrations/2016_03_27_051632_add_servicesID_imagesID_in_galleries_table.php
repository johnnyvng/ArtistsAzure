<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServicesIDImagesIDInGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            //
            $table->foreign('servicesID')
            ->references('id')
            ->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('imagesID')
            ->references('id')
            ->on('images')
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
        Schema::table('galleries', function (Blueprint $table) {
            //
            $table->dropForeign('galleries_servicesID_foreign');
            $table->dropForeign('galleries_imagesID_foreign');
            $table->dropColumn('servicesID');
            $table->dropColumn('imagesID');
        });
    }
}
