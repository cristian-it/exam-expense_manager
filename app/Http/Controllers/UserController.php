<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Hash;

class UserController extends Controller
{
     public function list()
     {
        $data['getRecord'] = User::getRecord();
         return view('adminPanel.user.list', $data);
     }

     public function add()
     {
        $data['getRole'] = Role::getRecord();
        return view('adminPanel.user.add', $data);
     }

     public function edit($id)
     {
         $data['getRecord'] = User::getSingleRecord($id);
         $data['getRole'] = Role::getRecord();
         return view('adminPanel.user.edit', $data);
     }

     public function insert(Request $request)
     {
        request()->validate([
            'email' =>'required|email|unique:users',
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('adminPanel/user')->with('success', "User added successfully");
     }

     public function update($id, Request $request)
     {
        $user = User::getSingleRecord($id);
        $user->name = trim($request->name);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('adminPanel/user')->with('success', "User Updated successfully");
     }

     public function delete($id)
     {
        $user = User::getSingleRecord($id);
        $user->delete();

        return redirect('adminPanel/user')->with('success', "User Deleted successfully");
     }
}
