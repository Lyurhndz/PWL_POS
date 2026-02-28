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
        Schema::create('m_item', function (Blueprint $table) {
            $table->id('item_id');
            $table->unsignedBigInteger('cat_id')->index();
            $table->string('item_code', 10)->unique();
            $table->string('item_name', 100);
            $table->integer('purchase_price');
            $table->integer('selling_price');
            $table->timestamps();

            $table->foreign('cat_id')->references('cat_id')->on('m_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_item');
    }
};
