<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    // Redirect to provider
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }
    
    // Callback request
    public function handleProviderCallback(Request $request, $provider)
    {
        // Twitter is little different then other because  
        if (strpos($request->path(), 'twitter')!==false) {
            $user = Socialite::driver($provider)->user();
        }else{
            $user = Socialite::driver($provider)->stateless()->user();
        }

        $this->userData($user, $provider);

    }

    /**
     * Retrive user data 
     */
    private function userData($user, $provider){
        // $data = [
        //         'id' => $user->id, 
        //         'name' => $user->name, 
        //         'email' => $user->email, 
        //         'image' => $user->avatar,
        //         'provider' => 'Twitter'
        //     ];

        echo "---- User information ----".'</br></br>';
        echo "Provider = ".$provider."</br>";
        echo "User id = ".$user->id.'</br>';
        echo "Name = ".$user->name.'</br>';
        echo "Email = ".$user->email.'</br>';
        echo "Image = ".$user->avatar.'</br>';
    }
}
