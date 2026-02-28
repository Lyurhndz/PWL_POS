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
        Schema::create('m_stock', function (Blueprint $table) {
            $table->id('stock_id');
            $table->unsignedBigInteger('item_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->dateTime('date_stock');
            $table->integer('stock_amount');
            $table->timestamps();

            $table->foreign('item_id')->references('item_id')->on('m_item');
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_stock');
    }
};
