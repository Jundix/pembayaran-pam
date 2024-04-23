<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `payment_histories` AS select `pamsimas`.`payments`.`id` AS `id`,`pamsimas`.`payments`.`id_customer` AS `id_customer`,`pamsimas`.`payments`.`id_pelanggan_pln` AS `id_pelanggan_pln`,`pamsimas`.`payments`.`tanggal_bayar` AS `tanggal_bayar`,`pamsimas`.`payments`.`biaya_admin` AS `biaya_admin`,`pamsimas`.`payments`.`total_bayar` AS `total_bayar`,`pamsimas`.`payments`.`id_bank` AS `id_bank`,`pamsimas`.`payments`.`id_metode_pembayaran` AS `id_metode_pembayaran`,`pamsimas`.`payments`.`status` AS `status`,`pamsimas`.`payments`.`bukti_bayar` AS `bukti_bayar`,`pamsimas`.`payments`.`created_at` AS `created_at`,`pamsimas`.`payments`.`updated_at` AS `updated_at`,`pamsimas`.`payments`.`deleted_at` AS `deleted_at`,`pamsimas`.`payment_details`.`id_pembayaran` AS `id_pembayaran`,`pamsimas`.`payment_details`.`id_tagihan` AS `id_tagihan`,`pamsimas`.`payment_details`.`denda` AS `denda`,`pamsimas`.`users`.`nama` AS `nama`,`pc`.`nama_pelanggan` AS `nama_pelanggan` from (((`pamsimas`.`payments` join `pamsimas`.`users` on((`pamsimas`.`payments`.`id_customer` = `pamsimas`.`users`.`id`))) join `pamsimas`.`pln_customers` `pc` on((`pamsimas`.`payments`.`id_pelanggan_pln` = `pc`.`id`))) join `pamsimas`.`payment_details` on((`pamsimas`.`payments`.`id` = `pamsimas`.`payment_details`.`id_pembayaran`))) order by `pamsimas`.`payments`.`tanggal_bayar` desc");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `payment_histories`");
    }
};
