<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
   public function githubRedirect(Request $request){

    return Socialite::driver('github')->redirect();
   }

   public function githubCallback(Request $request){
    $userData = Socialite::driver('github')->user();
  
    $user= User::where('email',$userData->email)
           ->where('auth_type','github')
           ->first();
           if($user){
          
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
           }
           else{

            // dd($userData);
            $uuid = Str::uuid()->toString();
  
            $user = User::create([
                'name' => $userData->name,
                'email' => $userData->email,
                'password' => Hash::make($uuid),
                'auth_type'=>'github',
                'active'=> 1,
            ]);

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);

           }


  

 
    

  
   }

   public function googleRedirect(Request $request){

    return Socialite::driver('google')->redirect();
   }

   public function googleCallback(Request $request){
    $userData = Socialite::driver('google')->user();




    $uuid = Str::uuid()->toString();
  
    $user = User::create([
        'name' => $userData->name,
        'email' => $userData->email,
        'password' => Hash::make($uuid),
        'auth_type'=>'google',
        'active'=> 1,
    ]);

  
    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
   }
}
