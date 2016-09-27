<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class UsersController extends ApiController
{
    public function index()
    {
        return User::with('roles')->paginate();
    }

    public function show(User $user)
    {
        $user->roles = $user->roles->pluck('name');

        return $user;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'roles'    => 'present|array',
            'roles.*'  => 'exists:roles,name'
        ]);

        User::create($request->all())->syncRoles($request->roles);

        return $this->respondStore();
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'     => 'sometimes|required|max:255',
            'email'    => 'sometimes|required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|confirmed|min:6',
            'roles.*'  => 'exists:roles,name'
        ]);

        $user->fill($request->all());

        $user->save();

        $user->syncRoles($request->roles);

        return $this->respondUpdate();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return $this->respondDestroy();
    }
}
