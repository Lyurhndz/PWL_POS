<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stock_id' => 1,
                'item_id' => 1,
                'user_id' => 1, // Admin
                'date_stock' => now(),
                'stock_amount' => 50,
            ],
            [
                'stock_id' => 2,
                'item_id' => 2,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 30,
            ],
            [
                'stock_id' => 3,
                'item_id' => 3,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 25,
            ],
            [
                'stock_id' => 4,
                'item_id' => 4,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 20,
            ],
            [
                'stock_id' => 5,
                'item_id' => 5,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 100,
            ],
            [
                'stock_id' => 6,
                'item_id' => 6,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 200,
            ],
            [
                'stock_id' => 7,
                'item_id' => 7,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 150,
            ],
            [
                'stock_id' => 8,
                'item_id' => 8,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 300,
            ],
            [
                'stock_id' => 9,
                'item_id' => 9,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 500,
            ],
            [
                'stock_id' => 10,
                'item_id' => 10,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 180,
            ],
            [
                'stock_id' => 11,
                'item_id' => 11,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 75,
            ],
            [
                'stock_id' => 12,
                'item_id' => 12,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 60,
            ],
            [
                'stock_id' => 13,
                'item_id' => 13,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 45,
            ],
            [
                'stock_id' => 14,
                'item_id' => 14,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 40,
            ],
            [
                'stock_id' => 15,
                'item_id' => 15,
                'user_id' => 1,
                'date_stock' => now(),
                'stock_amount' => 80,
            ],
        ];

        DB::table('m_stock')->insert($data);
    }
}
