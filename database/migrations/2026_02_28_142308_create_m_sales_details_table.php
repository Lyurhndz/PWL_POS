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
        Schema::create('m_sales_details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('sale_id')->index();
            $table->unsignedBigInteger('item_id')->index();
            $table->integer('price');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('sale_id')->references('sale_id')->on('m_sales');
            $table->foreign('item_id')->references('item_id')->on('m_item');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_sales_details');
    }
};