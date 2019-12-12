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
        $data = [
                'id' => $user->id, 
                'name' => $user->name, 
                'email' => $user->email, 
                'image' => $user->avatar,
                'provider' => 'Twitter'
            ];

        echo "---- User information ----".'</br></br>';
        echo "Provider = ".$data['provider'].'</br>';
        echo "User id = ".$data['id'].'</br>';
        echo "Name = ".$data['name'].'</br>';
        echo "Email = ".$data['email'].'</br>';
        echo "Image = ".$data['image'].'</br>';
    }
}
