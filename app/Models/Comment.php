<?php
namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);    
    }
    
}
