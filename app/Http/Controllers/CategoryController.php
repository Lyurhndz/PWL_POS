<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class CategoryController extends Controller
{
    public function index()
    {
        // $data = [
        //     'cat_code' => 'SNK',
        //     'cat_name' => 'Snack',
        //     'created_at' => now()
        // ];
        // DB::table('m_category')->insert($data);
        // return 'New data insertion successful';

        // $row = DB::table('m_category')->where('Cat_code', 'SNK')->update(['cat_name' => 'Snacks']);
        // return 'Data updated. The amount of updated data: '.$row.' line';

        // $row = DB::table('m_category')->where('cat_code', 'SNK')->delete();
        // return 'Data deleted. The amount of deleted data: '.$row. ' line';

        $data = DB::table('m_category')->get();
        return view('category', ['data' => $data]);
    }
}
