<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supp_id' => 1,
                'supp_code' => 'SUP001',
                'supp_name' => 'PT Elektronik Maju',
                'supp_address' => 'Jl. Raya Elektronik No. 1, Surabaya',
            ],
            [
                'supp_id' => 2,
                'supp_code' => 'SUP002',
                'supp_name' => 'CV Food Station',
                'supp_address' => 'Jl. Kuliner No. 45, Jakarta',
            ],
            [
                'supp_id' => 3,
                'supp_code' => 'SUP003',
                'supp_name' => 'UD Fashion House',
                'supp_address' => 'Jl. Mode No. 78, Bandung',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
