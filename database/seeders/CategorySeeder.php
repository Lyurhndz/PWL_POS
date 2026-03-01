<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'cat_id' => 1,
                'cat_code' => 'ELC',
                'cat_name' => 'Elektronik',
            ],
            [
                'cat_id' => 2,
                'cat_code' => 'FNB',
                'cat_name' => 'Food & Beverage',
            ],
            [
                'cat_id' => 3,
                'cat_code' => 'FAS',
                'cat_name' => 'Fashion',
            ],
            [
                'cat_id' => 4,
                'cat_code' => 'HPC',
                'cat_name' => 'Home & Personal Care',
            ],
            [
                'cat_id' => 5,
                'cat_code' => 'BKS',
                'cat_name' => 'Buku & Stationery',
            ],
        ];

        DB::table('m_category')->insert($data);
    }
}
