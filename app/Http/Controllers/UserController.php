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

        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'name' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager56';

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

        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'name' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';

        // $user->save();
        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username', 'level_id']);
        // $user->wasChanged('name');
        // dd($user->wasChanged(['name', 'username']));

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $user = UserModel::with('level')->get();
        // dd($user);

        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }

    public function add(){
        return view ('user_add');
    }

    public function add_save(Request $request){
        $request->validate([
            'username' => 'required|unique:m_user,username',
            'name' => 'required',
            'password' => 'required|min:5',
            'level_id' => 'required|numeric'
        ]);

        UserModel::create([
            'username' => $request->username,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function change($id){
        $user = UserModel::find($id);
        return view('user_change', ['data' => $user]);
    }

    public function change_save($id, Request $request){
        $user = UserModel::find($id);

            $user->username = $request->username;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->level_id = $request->level_id;

            $user->save();
            return redirect('/user');
    }

    public function delete($id){
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
}
