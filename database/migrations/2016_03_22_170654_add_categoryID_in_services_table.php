<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIDInServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            //
            /*$table->dropForeign(['categoryID']);*/
            $table->foreign('categoryID')
            ->references('categoryID')
            ->on('categories')
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
        Schema::table('services', function (Blueprint $table) {
            //
            $table->dropForeign('services_categoryID_foreign');
            $table->dropColumn('categoryID');
        });
    }
}