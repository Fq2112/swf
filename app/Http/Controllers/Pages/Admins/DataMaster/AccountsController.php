<?php

namespace App\Http\Controllers\Pages\Admins\DataMaster;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    public function showAdminsTable()
    {
        $admins = User::all();

        return view('pages.admins.dataMaster.admin-table', compact('admins'));
    }

    public function createAdmins(Request $request)
    {
        $this->validate($request, [
            'ava' => 'image|mimes:jpg,jpeg,gif,png|max:2048',
            'name' => 'required|string|max:191',
            'username' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'position' => 'required',
            'role' => 'required'
        ]);

        if ($request->hasfile('ava')) {
            $name = $request->file('ava')->getClientOriginalName();
            $request->file('ava')->storeAs('public/admins/ava', $name);

        } else {
            $name = null;
        }

        User::create([
            'ava' => $name,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position,
            'role' => $request->role
        ]);

        return back()->with('success', '' . $request->name . ' is successfully created!');
    }

    public function updateProfileAdmins(Request $request)
    {
        $admin = User::find($request->admin_id);
        $this->validate($request, [
            'ava' => 'image|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        if ($request->hasFile('ava')) {
            $name = $request->file('ava')->getClientOriginalName();
            if ($admin->ava != '') {
                Storage::delete('public/admins/ava/' . $admin->ava);
            }
            $request->file('ava')->storeAs('public/admins/ava', $name);

        } else {
            $name = $admin->ava;
        }
        $admin->update([
            'ava' => $name,
            'name' => $request->name,
            'position' => $request->position
        ]);

        return back()->with('success', 'Successfully update ' . $admin->name . '\'s profile!');
    }

    public function updateAccountAdmins(Request $request)
    {
        $admin = User::find($request->admin_id);
        if (!Hash::check($request->password, $admin->password)) {
            return back()->with('error', '' . $admin->name . '\'s current password is incorrect!');

        } else {
            if ($request->new_password != $request->password_confirmation) {
                return back()->with('error', '' . $admin->name . '\'s password confirmation doesn\'t match!');

            } else {
                $admin->update([
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => bcrypt($request->new_password),
                    'role' => $request->role == null ? 'root' : $request->role
                ]);
                return back()->with('success', 'Successfully update ' . $admin->name . '\'s account!');
            }
        }
    }

    public function deleteAdmins($id)
    {
        $admin = User::find(decrypt($id));
        if ($admin->ava != '') {
            Storage::delete('public/admins/ava/' . $admin->ava);
        }
        $admin->forceDelete();

        return back()->with('success', '' . $admin->name . ' is successfully deleted!');
    }

    public function massDeleteAdmins(Request $request)
    {
        $admins = User::whereIn('id', explode(",", $request->admin_ids))->get();
        foreach ($admins as $admin) {
            if ($admin->ava != '') {
                Storage::delete('public/admins/ava/' . $admin->ava);
            }
            $admin->forceDelete();
        }
        $message = count($admins) > 1 ? count($admins) . ' admin accounts are ' : count($admins) . ' admin account is ';

        return back()->with('success', $message . 'successfully deleted!');
    }
}
