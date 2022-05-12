<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->integer('IDTutor', true);
            $table->string('NamaTutor', 100)->nullable();
            $table->text('Alamat')->nullable();
            $table->text('Photo')->nullable();
            $table->string('NoWA', 20)->nullable();
            $table->text('Email');
            $table->integer('IDCamp')->index('IDCamp');
            $table->dateTime('CreatedAt')->nullable()->useCurrent();
            $table->timestamp('UpdatedAt')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor');
    }
}
