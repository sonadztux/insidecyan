<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne('App\Models\User', 'foreign_key');
    }
}
