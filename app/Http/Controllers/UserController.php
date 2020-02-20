<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(2);
        return view('admin.user.index', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this -> validate($request,[
            'name' => 'required|min:3|max:50',
            'tipe' => 'required'
        ]);

        if ($request -> input('password')) {
            $post_data = [
                'name' => $request -> name,
                'tipe' => $request -> tipe,
                'password' => bcrypt($request -> password)
            ];
        } else {
            $post_data = [
                'name' => $request -> name,
                'tipe' => $request -> tipe
            ];
        }

        User::whereId($id)->update($post_data);

        return redirect()->route('user.index')->with('success', 'berhasil merupah data');

    }

}
