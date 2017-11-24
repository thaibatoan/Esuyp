<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Social;
use App\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;


class AuthController extends Controller
{


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $authUser = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($authUser, $provider);
        Auth::login($authUser, true);
        return redirect(route('index'));
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $check = Social::where('provider_id', $user->id)->where('provider',$provider)->first();
        if ($check) {
            return $u = User::where('email',$user->email)->first();
        }

        $social= new Social();
        $social->provider= $provider;
        $social->provider_id= $user->id;

        $profile = new Profile();
        $profile->display_name = $user->name;
        $profile->avatar_url = $user->avatar;
        
        $u = User::where('email',$user->email)->first();
        
        if(!$u){
            $u = User::create([
                'role_id' => '2',
                'email' => $user->email,
            ]);
        }

        $profile->user()->associate($u);
        $social->user()->associate($u);
        $social->save();
        $profile->save();

        return $u;
    }
}
