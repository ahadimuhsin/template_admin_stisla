<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //menambahkan relationship tabel reports ke tabel lain
        Schema::table('reports', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            //
            $table->dropForeign('reports_user_id_foreign');
            $table->dropForeign('reports_province_id_foreign');
            $table->dropForeign('reports_city_id_foreign');

        });
    }
}
