<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = (new User)->fill($request->all());
        $user->save($request);
        return $user;
    }

    public function update(User $user, Request $request)
    {
        $user->fill($request->all());
        $user->save($request);
        return $user;
    }

    public function destroy(User $user)
    {
    }

    public function show(User $user)
    {
        return $user;
    }
}
