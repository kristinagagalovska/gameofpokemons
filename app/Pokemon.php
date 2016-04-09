<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'name', 'image', 'strength', 'user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}