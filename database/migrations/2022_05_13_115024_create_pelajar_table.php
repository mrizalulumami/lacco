<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajar', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('KodePelajar', 20)->nullable()->unique('KodePelajar');
            $table->string('NamaPelajar', 100)->nullable();
            $table->enum('JenisKelamin', ['L', 'P'])->nullable();
            $table->text('Alamat')->nullable();
            $table->string('TempatLahir', 50)->nullable();
            $table->date('TanggalLahir')->nullable();
            $table->string('NoTelpon', 20)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('PendidikanTerakhir', 20)->nullable();
            $table->string('NamaAyah', 50)->nullable();
            $table->string('NamaIbu', 50)->nullable();
            $table->string('KontakDarurat', 20)->nullable();
            $table->string('HubunganDenganKontak', 20)->nullable();
            $table->date('RencanaDatang')->nullable();
            $table->integer('IDPaketDiambil')->nullable()->index('IDPaketDiambil');
            $table->integer('IDRuanganCamp')->nullable()->index('IDRuanganCamp');
            $table->integer('IDCamp')->index('IDCamp');
            $table->string('DurasiProgram', 20)->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelajar');
    }
}
