<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;
    protected $fillable = ['name','website','email','bio','phone','address','user_id'];



    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
