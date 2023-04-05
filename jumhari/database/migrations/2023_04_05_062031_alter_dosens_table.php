<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("dosens", function(Blueprint $table) {
            $table->string("nama_dosen");
            $table->char("kode_dosen", 6)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("dosens", function(Blueprint $table) {
            $table->dropColumn("nama_dosen");
            $table->dropColumn("kode_dosen");
        });
    }
}
