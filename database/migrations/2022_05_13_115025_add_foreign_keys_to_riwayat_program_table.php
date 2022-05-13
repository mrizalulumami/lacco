<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRiwayatProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riwayat_program', function (Blueprint $table) {
            $table->foreign(['IDProgram'], 'riwayat_program_ibfk_2')->references(['IDProgram'])->on('program');
            $table->foreign(['IDPengguna'], 'riwayat_program_ibfk_3')->references(['IDPengguna'])->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_program', function (Blueprint $table) {
            $table->dropForeign('riwayat_program_ibfk_2');
            $table->dropForeign('riwayat_program_ibfk_3');
        });
    }
}
