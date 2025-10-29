<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.data-user.indexDataUser', compact('user'));
    }
    public function formDataUser()
    {
        return view('admin.data-user.createDataUser');
    }
    public function createDataUser(Request $request)
    {
        // validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'jenis_kelamin' => 'required|in:P,L',
            'telp' => 'nullable|string|max:13'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'telp' => $request->telp,
            'role' => 2,
        ]);

        return redirect()->route('index.data-user');
    }

    public function editDataUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('admin.data-user.editDataUser', compact('user'));
    }

    public function updateDataUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telp = $request->telp;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->username = $request->username;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return redirect()->route('index.data-user');
    }

    public function deleteDataUser(Request $request){
        $user = User::findOrFail($request->id);
        $user->delete();
        return redirect()->back();
    }
}
