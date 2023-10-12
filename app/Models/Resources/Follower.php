<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model {

    protected $table = 'follower';
    protected $fillable = ['follower', 'user_blog'];
    
   
}

