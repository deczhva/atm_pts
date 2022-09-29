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
        Schema::create('listrik_pulsas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained();
            $table->string('no_hp');
            $table->foreignId('pembayaran_id')->contrained();
            $table->int('nominal');
            $table->string('invoice_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listrik_pulsas');
    }
};
