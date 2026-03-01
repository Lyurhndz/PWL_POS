<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1 (Elektronik) - Items 1-5
            [
                'item_id' => 1,
                'cat_id' => 1, // Elektronik
                'supp_id' => 1, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'ELC001',
                'item_name' => 'Smart TV 32 Inch',
                'purchase_price' => 2500000,
                'selling_price' => 2800000,
            ],
            [
                'item_id' => 2,
                'cat_id' => 1,
                'supp_id' => 1, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'ELC002',
                'item_name' => 'Kulkas 2 Pintu',
                'purchase_price' => 3200000,
                'selling_price' => 3500000,
            ],
            [
                'item_id' => 3,
                'cat_id' => 1,
                'supp_id' => 1, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'ELC003',
                'item_name' => 'Mesin Cuci 10kg',
                'purchase_price' => 2800000,
                'selling_price' => 3100000,
            ],
            [
                'item_id' => 4,
                'cat_id' => 1,
                'supp_id' => 1, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'ELC004',
                'item_name' => 'Air Conditioner 1PK',
                'purchase_price' => 3500000,
                'selling_price' => 3900000,
            ],
            [
                'item_id' => 5,
                'cat_id' => 1,
                'supp_id' => 1, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'ELC005',
                'item_name' => 'Rice Cooker 1.8L',
                'purchase_price' => 350000,
                'selling_price' => 450000,
            ],
            
            // Supplier 2 (Food & Beverage) - Items 6-10
            [
                'item_id' => 6,
                'cat_id' => 2,
                'supp_id' => 2, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FNB001',
                'item_name' => 'Kopi Arabika 200g',
                'purchase_price' => 45000,
                'selling_price' => 55000,
            ],
            [
                'item_id' => 7,
                'cat_id' => 2,
                'supp_id' => 2, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FNB002',
                'item_name' => 'Teh Hijau 50 Kantong',
                'purchase_price' => 25000,
                'selling_price' => 35000,
            ],
            [
                'item_id' => 8,
                'cat_id' => 2,
                'supp_id' => 2, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FNB003',
                'item_name' => 'Biskuit Coklat 200g',
                'purchase_price' => 15000,
                'selling_price' => 22000,
            ],
            [
                'item_id' => 9,
                'cat_id' => 2,
                'supp_id' => 2, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FNB004',
                'item_name' => 'Mie Instan Goreng',
                'purchase_price' => 2500,
                'selling_price' => 3500,
            ],
            [
                'item_id' => 10,
                'cat_id' => 2,
                'supp_id' => 2, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FNB005',
                'item_name' => 'Susu UHT 1L',
                'purchase_price' => 18000,
                'selling_price' => 22000,
            ],
            
            // Supplier 3 (Fashion) - Items 11-15
            [
                'item_id' => 11,
                'cat_id' => 3,
                'supp_id' => 3, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FAS001',
                'item_name' => 'Kemeja Pria Lengan Panjang',
                'purchase_price' => 120000,
                'selling_price' => 180000,
            ],
            [
                'item_id' => 12,
                'cat_id' => 3,
                'supp_id' => 3, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FAS002',
                'item_name' => 'Celana Jeans Wanita',
                'purchase_price' => 150000,
                'selling_price' => 220000,
            ],
            [
                'item_id' => 13,
                'cat_id' => 3,
                'supp_id' => 3, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FAS003',
                'item_name' => 'Jaket Hoodie',
                'purchase_price' => 130000,
                'selling_price' => 200000,
            ],
            [
                'item_id' => 14,
                'cat_id' => 3,
                'supp_id' => 3, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FAS004',
                'item_name' => 'Sepatu Sneakers',
                'purchase_price' => 250000,
                'selling_price' => 350000,
            ],
            [
                'item_id' => 15,
                'cat_id' => 3,
                'supp_id' => 3, // Changed from 'supplier_id' to 'supp_id'
                'item_code' => 'FAS005',
                'item_name' => 'Topi Baseball',
                'purchase_price' => 40000,
                'selling_price' => 65000,
            ],
        ];

        DB::table('m_item')->insert($data);
    }
}
