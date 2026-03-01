<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_code, level_name, created_at) values(?, ?, ?)', ['cus', 'customer' , now()]);
        // return 'Insert data is now successful';

        // $row = DB::update('update m_level set level_name = ? where level_code = ?', ['Customer', 'cus']);
        // return 'Data update success. The ampunt of updated data: ' .$row.' line';

        // $row = DB::delete('delete from m_level where level_code = ?', ['cus']);
        // return 'Data deletion is successful. The amount of deleted data: ' .$row.' line';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
