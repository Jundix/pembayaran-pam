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
        Schema::table('indonesia_villages', function (Blueprint $table) {
            $table->foreign(['district_id'])->references(['id'])->on('indonesia_districts')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indonesia_villages', function (Blueprint $table) {
            $table->dropForeign('indonesia_villages_district_id_foreign');
        });
    }
};
