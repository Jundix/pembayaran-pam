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
        Schema::table('indonesia_cities', function (Blueprint $table) {
            $table->foreign(['province_id'])->references(['id'])->on('indonesia_provinces')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indonesia_cities', function (Blueprint $table) {
            $table->dropForeign('indonesia_cities_province_id_foreign');
        });
    }
};
