<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\User;
use App\Notifications\WelcomeNotification;
use App\Filters\UserFilter;
use App\Http\Requests;
use App\Http\Controllers\ApiController;

class UsersController extends ApiController
{
    public function index(UserFilter $filter)
    {
        return User::with('roles')->filter($filter)->paginate();
    }

    public function show(User $user)
    {
        $user->roles = $user->roles()->pluck('name');

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

        $user = User::create($request->all())->syncRoles($request->roles);

        $user->notify(new WelcomeNotification);

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

        $user->fill($request->all())->save();

        $user->syncRoles($request->roles);

        return $this->respondUpdate();
    }

    public function destroy(User $user)
    {
        $user->delete();

        return $this->respondDestroy();
    }
}
