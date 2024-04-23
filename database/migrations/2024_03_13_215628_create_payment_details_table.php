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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('id_pembayaran', 36)->index('payment_details_id_pembayaran_foreign');
            $table->unsignedBigInteger('id_tagihan')->index('payment_details_id_tagihan_foreign');
            $table->decimal('denda', 10)->default(0);
            $table->decimal('ppn', 10)->default(0);
            $table->decimal('ppj', 10)->default(0);
            $table->decimal('total_tagihan', 10)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_details');
    }
};
