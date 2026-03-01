<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        // For each sale (1-10), create 3 details
        for ($sale_id = 1; $sale_id <= 10; $sale_id++) {
            // Get 3 random items for each sale
            $item_ids = array_rand(range(1, 15), 3);
            
            foreach ($item_ids as $item_index) {
                $item_id = $item_index + 1; // Convert to actual item_id (1-15)
                $quantity = rand(1, 5);
                $price = $this->getItemPrice($item_id); // You'll need to define this
                
                $data[] = [
                    'detail_id' => $detail_id++,
                    'sale_id' => $sale_id,
                    'item_id' => $item_id,
                    'price' => $price,
                    'amount' => $quantity,
                ];
            }
        }

        DB::table('m_sales_details')->insert($data);
    }

    private function getItemPrice($item_id)
    {
        // This is a helper function - in real app you'd query the DB
        $prices = [
            1 => 2800000, 2 => 3500000, 3 => 3100000, 4 => 3900000, 5 => 450000,
            6 => 55000, 7 => 35000, 8 => 22000, 9 => 3500, 10 => 22000,
            11 => 180000, 12 => 220000, 13 => 200000, 14 => 350000, 15 => 65000,
        ];
        
        return $prices[$item_id] ?? 0;
    }
}
