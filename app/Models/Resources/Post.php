<?php 

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    
    protected $table = 'post';
    protected $fillable = ['title'];
    
}
