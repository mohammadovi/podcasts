<?php

namespace App\Http\Controllers;

use App\Models\ActiveCode;
use App\Notifications\ActiveCodeNoti;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function postManageTwoFactor(Request $request)
    {
      $data =  $request->validate([
           'type' => 'required',
           'phone' =>'required_unless:type,off'
          //if u want just verify phone for 1 Accunt
//          'phone' =>'required_unless:type,off|unique:users,phone_number'
        ]);

      if ($data['type'] === 'sms'){
            if ($request->user()->phone_number !== $data['phone']){
                $code = ActiveCode::generateCode($request->user());
                $request->session()->flash('phone',$data['phone']);

                //Todo _SendToCode
                $request->user()->notify(new ActiveCodeNoti($code,$data['phone']));

                return redirect(route('profile.2fa.phone'));
            }else{
                $request->user()->update([
                    'two_factor_type' => 'sms'
                ]);
            }
        }
        if ($data['type'] === 'off'){
            $request->user()->update([
               'two_factor_type' => 'off'
            ]);
        }
        return back();
    }

    public function getPhoneVerify(Request $request)
    {
        if (! $request->session()->has('phone')){
            return redirect(route('profile'));
        }
        $request->session()->reflash();
        return view('profile.phone-verify');
    }

    public function postPhoneVerify(Request $request)
    {
        $request->validate([
           'token' => 'required'
        ]);
        if (! $request->session()->has('phone')){
            return redirect(route('profile'));
        }

        $status = ActiveCode::verifyCode($request->token ,$request->user());
        if ($status){
            //Delete CodeVerify for auth->user
            $request->user()->activeCode()->delete();

            $request->user()->update([
                'phone_number' => $request->session()->get('phone'),
               'two_factor_type' => 'sms'
            ]);
            alert()->success(' احراز هویت دو مرحله ایی شما','با موفقیت انجام شد');
        }else{
            alert()->error(' احراز هویت دو مرحله ایی شما','با خطا مواجه شد');

        }
        return redirect(route('profile'));

    }
}
