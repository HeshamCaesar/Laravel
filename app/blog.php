<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class blog extends Model
{
       public function users()
        {
            return $this->belongsTo(user::class,'user_id');
        }
    
}
