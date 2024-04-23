<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_details', function (Blueprint $table) {
            $table->foreign(['id_pembayaran'])->references(['id'])->on('pembayaran')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_tagihan'])->references(['id'])->on('tagihan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_details', function (Blueprint $table) {
            $table->dropForeign('payment_details_id_pembayaran_foreign');
            $table->dropForeign('payment_details_id_tagihan_foreign');
        });
    }
};
