<?php

namespace App\Http\Controllers;

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
        ]);

      if ($data['type'] === 'sms'){
            if ($request->user()->phone_number !== $data['phone']){
                //Todo _SendToCode
                return 'verify YOur NUmber';
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
}
