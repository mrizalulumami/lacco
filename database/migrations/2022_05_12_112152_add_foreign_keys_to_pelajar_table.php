<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPelajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelajar', function (Blueprint $table) {
            $table->foreign(['IDPaketDiambil'], 'pelajar_ibfk_3')->references(['IDPaket'])->on('paket')->onDelete('CASCADE');
            $table->foreign(['IDRuanganCamp'], 'pelajar_ibfk_2')->references(['IDRuanganCamp'])->on('ruangan_camp');
            $table->foreign(['IDCamp'], 'pelajar_ibfk_4')->references(['IDCamp'])->on('camp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelajar', function (Blueprint $table) {
            $table->dropForeign('pelajar_ibfk_3');
            $table->dropForeign('pelajar_ibfk_2');
            $table->dropForeign('pelajar_ibfk_4');
        });
    }
}
