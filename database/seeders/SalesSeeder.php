<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'sale_id' => $i,
                'user_id' => rand(2, 3), // Randomly assign to manager (2) or staff (3)
                'buyer' => 'Pembeli ' . $i,
                'sale_code' => 'TRX' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'sale_date' => now()->subDays(rand(1, 30))->subHours(rand(1, 12)),
            ];
        }

        DB::table('m_sales')->insert($data);
    }
}
