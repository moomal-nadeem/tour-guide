<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'cnic',
        'status1',
        'status2',
        'img',
        'cover',
        'licence',
        'cnic',
        'pno',

    ];



    public function userinfo()
    {
        return $this->hasOne(Userinfo::class, 'uID', 'id');
    }


    public function language()
    {
        return $this->hasOne(Language::class);
    }

    public function paymentinfo()
    {
        return $this->hasOne(PaymentInfo::class, 'uID', 'id');
    }

    public function addressinfo()
    {
        return $this->hasOne(AddressInfo::class, 'uID', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
