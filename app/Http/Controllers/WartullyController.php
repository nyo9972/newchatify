<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WartullyController
{
    public function create (Request $request) {
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            $dataUser = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ];
            $user = new User();
            $user->fill($dataUser)->save();
        } else {
            $dataUser = [
                'name' => $request->name,
                'password' => bcrypt($request->password),
            ];
            $user->update($dataUser);
        }

        return $user;
    }
}
