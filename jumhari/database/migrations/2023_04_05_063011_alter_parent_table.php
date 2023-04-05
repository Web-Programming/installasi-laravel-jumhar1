<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterParentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("parent",function(Blueprint $table){
            $table->string("nama_mhs");
            $table->char("npm_mhs", 11);
            $table->string("hp_ortu", 14);
            $table->dropColumn("email_ortu", 150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("parent", function(Blueprint $table){
            $table->dropColumn("nama_mhs");
            $table->dropColumn("npm_mhs");
            $table->dropColumn("hp_ortu");
            $table->dropColumn("email_ortu");

        });
    }
}
