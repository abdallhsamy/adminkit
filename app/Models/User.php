<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;

    protected $fillable = [
        'name',
        'photo',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'name' => 'string',
        'photo' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
    }

    public function avatar()
    {
        if (! is_null($this->photo)) {
            return URL::to($this->photo);
        }

        return "https://ui-avatars.com/api/?name={$this->name}&background=random";
    }
}
