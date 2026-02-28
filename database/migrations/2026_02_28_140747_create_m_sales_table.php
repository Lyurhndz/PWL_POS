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
        Schema::create('m_sales', function (Blueprint $table) {
            $table->id('sale_id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('buyer', 50);
            $table->string('sale_code', 20);
            $table->dateTime('sale_date');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_sales');
    }
};
