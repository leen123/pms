<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    /**
     * The attributes that are mass assignable.
     *
     *@var array
     */
     protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
   /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role','role_id');
            }

       public function location(){
          return $this->belongsTo('App\Location','location_id');
                    }

           public function bills(){
               return $this->hasMany('App\Bill','user_id');
                     }

            public function orders(){
                return $this->hasMany('App\Order','user_id');
                 }



}


