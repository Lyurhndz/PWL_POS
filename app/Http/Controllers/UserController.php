<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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
        // $user = UserModel::findOr(20, ['username', 'name'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(10);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        // return view('user', ['data' => $user]);
        // $totalUsers = UserModel::where('level_id', 2)->count();
        // return view('user', ['total' => $totalUsers]);

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'name' => 'Manager Two Two',
        //         'level_id' => 2,
        //         'password' => Hash::make('12345')
        //     ],
        // );
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'name' => 'Manager Three Three',
        //         'password' => hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // return view('user', ['data' => $user]);

        $user = UserModel::create([
            'username' => 'manager55',
            'name' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager56';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('name');
        // $user->isDirty(['name', 'username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('name');
        // $user->isClean(['name', 'username']);

        // $user->save();
        
        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());

        $user = UserModel::create([
            'username' => 'manager11',
            'name' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();
        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username', 'level_id']);
        $user->wasChanged('name');
        dd($user->wasChanged(['name', 'username']));

    }
}
