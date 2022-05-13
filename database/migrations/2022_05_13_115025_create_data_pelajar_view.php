<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDataPelajarView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `data_pelajar` AS select `a`.`NamaPelajar` AS `namapelajar`,`b`.`NamaPaket` AS `namapaket`,`c`.`NamaProgram` AS `namaprogram`,`d`.`NamaCamp` AS `namacamp`,`e`.`NamaTutor` AS `namatutor`,`f`.`NamaItem` AS `namaitem` from `lacco`.`pelajar` `a` join `lacco`.`paket` `b` join `lacco`.`program` `c` join `lacco`.`camp` `d` join `lacco`.`tutor` `e` join `lacco`.`item_paket` `f` where `a`.`IDPaketDiambil` = `b`.`IDPaket` and `a`.`DurasiProgram` = `c`.`IDProgram` and `a`.`IDCamp` = `d`.`IDCamp` and `a`.`IDCamp` = `e`.`IDCamp` and `a`.`IDPaketDiambil` = `f`.`IDPaket`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `data_pelajar`");
    }
}
