<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return 1;
    }

    public function edit($id)
    {
        return 1;
    }

    public function update($id)
    {
        return 1;
    }

    public function destroy($id)
    {
        return "USER DESTROYED!";
    }

    public function create()
    {
        return view('admin.user.create',
            ['users' => \App\User::all()]
        );
    }

    public function store( Request $request )
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = new \App\User();
        $user->name = $request->get('name');
        $user->save();

        return ;
    }
}
