<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

class LoginController extends Controller
{

    // redirect
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    // retrive user data
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        print_r($user);
        exit();
        // return view('home');
    }
}
