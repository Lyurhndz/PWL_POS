<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'username' => 'customer-1',
        //     'name' => 'cus',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data);

        // $data = [
        //     'name' => 'First Cust',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);


        //JS4
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_three',
        //     'name' => 'Manager 3',
        //     'password' => hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(1, ['username', 'name'], function(){
        //     abort(404);
        // });
        $user = UserModel::findOr(20, ['username', 'name'], function(){
            abort(404);
        });
        return view('user', ['data' => $user]);
    }
}
