<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    // View for role listings
    public function list()
    {
        $data['getRecord'] = Role::getRecord();
        return view('adminPanel.role.list', $data);
    }

    //VIEW Add role Pannel Display function
    public function add()
    {
        return view('adminPanel.role.add');
    }

    // Insert new Role data to database
    public function insert(Request $request)
    {
        $save = new Role;
        $save->name = $request->name;
        $save->description = $request->description;
        $save->save();

        return redirect('adminPanel/role')->with('success', "Role created successfully");
    }

    // get data for editinging Role
    public function edit($id)
    {
        $data['getRecord'] = Role::getSingleRecord($id);
        return view('adminPanel.role.edit', $data);
    }

    // Update Role
    public function update($id, Request $request)
    {
        $save = Role::getSingleRecord($id);
        $save->name = $request->name;
        $save->description = $request->description;
        $save->save();

        return redirect('adminPanel/role')->with('success', "Role updated successfully");
    }

    // Delete Role
    public function delete($id)
    {
        $save = Role::getSingleRecord($id);
        $save->delete();

        return redirect('adminPanel/role')->with('success', "Role deleted successfully");
    }

}
