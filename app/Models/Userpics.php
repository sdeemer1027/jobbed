<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpics extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pic'
    ];







    public function userPic()
    {
        return $this->belongsTo(User::class);
    }


}
