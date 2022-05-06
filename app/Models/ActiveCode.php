<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    use HasFactory;

    protected $fillable=[
      'user_id',
      'code',
      'expired_at'
    ];
 public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeVerifyCode($query, $code ,$user)
    {
        return !! $user->activeCode()->whereCode($code)->where('expired_at','>' ,now())->first();
    }

    public function scopeGenerateCode($query ,$user)
    {
      if ($code =$this->getAliveCodeForUser($user)){
        $code = $code->code;
      }else{
          do{
              $code = mt_rand(100000 , 999999);
          }while($this->checkCodeisUnique($user , $code));
          //Todo _StoreTheCode
          $user->activeCode()->create([
              'code' => $code,
              'expired_at' => now()->addMinute(10)
          ]);
      }
        return $code;
    }

    private function checkCodeisUnique($user, int $code)
    {
        return !! $user->activeCode()->whereCode($code)->first();
    }

    private function getAliveCodeForUser($user)
    {
        return  $user->activeCode()->where('expired_at','>' ,now())->first();
    }

}
