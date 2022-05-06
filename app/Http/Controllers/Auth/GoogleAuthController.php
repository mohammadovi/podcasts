<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;


class GoogleAuthController extends Controller
{
    use   TwoFactorAuthenticate;
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try{
            $googleUser=Socialite::driver('google')->user();
            $user= User::where('email',$googleUser->email)->first();

            if (! $user){
                $user =User::create([
                    'name' =>$googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(\Str::random(16))
                ]);

            }
            auth()->loginUsingId($user->id);


            return $this->loggendin($request , $user) ?: redirect(route('profile'));

        }catch (\Exception $e){
            //Todo Show_Error_Massage

            alert()->error('ورورد با گوگل موفقیت آمیز نبود')->persistent('بسیار خب');
            return  redirect('/login');
        }
    }
}
