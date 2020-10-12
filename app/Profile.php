<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'birthday',
        'sex',
        'county',
        'website',
        'phone',
        'email',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
