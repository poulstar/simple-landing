<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function loginView() {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');

        $user = User::query()->where('email', $username)->first();
        if($user) {
            if(Hash::check($password, $user->password)) {
                Auth::loginUsingId($user->id);
                return redirect()->route('dashboard');
            }
        }

        return back();
    }
}
