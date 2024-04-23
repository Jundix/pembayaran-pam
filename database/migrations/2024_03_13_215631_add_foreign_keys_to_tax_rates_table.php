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
        Schema::table('tax_rates', function (Blueprint $table) {
            $table->foreign(['indonesia_city_id'])->references(['id'])->on('indonesia_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tax_type_id'])->references(['id'])->on('tax_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tax_rates', function (Blueprint $table) {
            $table->dropForeign('tax_rates_indonesia_city_id_foreign');
            $table->dropForeign('tax_rates_tax_type_id_foreign');
        });
    }
};
