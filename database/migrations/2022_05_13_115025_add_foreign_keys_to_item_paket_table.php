<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToItemPaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_paket', function (Blueprint $table) {
            $table->foreign(['IDPaket'], 'item_paket_ibfk_1')->references(['IDPaket'])->on('paket')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_paket', function (Blueprint $table) {
            $table->dropForeign('item_paket_ibfk_1');
        });
    }
}
