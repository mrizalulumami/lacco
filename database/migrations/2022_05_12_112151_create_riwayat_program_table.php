<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_program', function (Blueprint $table) {
            $table->integer('IDRiwayat', true);
            $table->string('KodePelajar', 10)->nullable()->index('KodePelajar');
            $table->string('Periode', 20)->nullable();
            $table->integer('IDProgram')->nullable()->index('IDProgram');
            $table->string('Status', 10)->nullable();
            $table->enum('Sertifikat', ['online', 'offline'])->nullable();
            $table->dateTime('CreatedAt')->nullable()->useCurrent();
            $table->timestamp('UpdatedAt')->useCurrentOnUpdate()->useCurrent();
            $table->integer('IDPengguna')->nullable()->index('IDPengguna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_program');
    }
}
