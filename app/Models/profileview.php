<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileview extends Model
{
    use HasFactory;
    protected $table = 'profileviews';
    protected $fillable = ['user_id', 'link', 'qr','ran_id'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
