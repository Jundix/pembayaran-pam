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
        Schema::create('level_permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_level')->index('level_permission_id_level_foreign');
            $table->unsignedBigInteger('id_permission')->index('level_permission_id_permission_foreign');
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
        Schema::dropIfExists('level_permission');
    }
};
