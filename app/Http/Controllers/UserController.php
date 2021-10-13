<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function allData(){
        $users = User::all();
        return $users;
    }

    public function singleData($id){
        $user = User::find($id);
        return $user;
    }

    public function create(){
        $data = [
            'name' => 'john',
            'email' => 'john@yahoo.com',
            'password' => '12345'
        ];

        User::create($data);
        return 'Data created';
    }

    public function deleteData($id){
        $user = User::findOrFail($id);
        $user->delete();
        return 'deleted';
    }

    public function updateData($id){
        $user = User::findOrFail($id);
        $user->name = 'New Name';
        $user->save();
        return 'updated';
    }

    public function showToken(){
        echo csrf_token();
    }

    public function showData($id,$email='jh@yahoo.com'){
        echo $id." ".$email;
    }


    public function addUser(){
        return view('users.user');
       
    }

    public function user() {
        return 'User added';
    }

    public function editUser(){
        return view('users.user');
       
    }

    public function userEdited() {
        return 'User updated';
    }

    public function editName(){
        return view('users.user');
       
    }

    public function nameEdited() {
        return 'Name updated';
    }

    public function deleteUser(){
        return view('users.user');
       
    }

    public function userDeleted() {
        return 'user deleted';
    }
}
