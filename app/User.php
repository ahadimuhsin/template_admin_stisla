<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_id', 'image', 'gender', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*
     * Definisi relasi user dengan tabel lain
     * 1. Dengan job, one to many. Satu user memiliki satu pekerjaan
     * 2. Dengan reports, satu user dapat membuat banyak reports
     */
    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
