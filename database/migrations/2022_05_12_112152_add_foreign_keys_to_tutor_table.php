<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutor', function (Blueprint $table) {
            $table->foreign(['IDCamp'], 'tutor_ibfk_1')->references(['IDCamp'])->on('camp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tutor', function (Blueprint $table) {
            $table->dropForeign('tutor_ibfk_1');
        });
    }
}
