<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paymentinfos', function (Blueprint $table) {
            $table->id();
            $table->string('appname');
            $table->string('accountname');
            $table->string('accountnumber');
            $table->string('paymentmethod');
            $table->integer('accountlimit');
            $table->integer('uID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_paymentinfos');
    }
};
