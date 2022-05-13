<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRuanganCampTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ruangan_camp', function (Blueprint $table) {
            $table->foreign(['IDCamp'], 'ruangan_camp_ibfk_1')->references(['IDCamp'])->on('camp')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ruangan_camp', function (Blueprint $table) {
            $table->dropForeign('ruangan_camp_ibfk_1');
        });
    }
}
