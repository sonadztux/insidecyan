<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
    ];

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

    // public function departamento()
    // {
    //     return $this->belongsTo('App\Models\Departamento', 'department_id');
    // }

    public function lecture()
    {
        return $this->belongsTo('App\Models\Lecture');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
