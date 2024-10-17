<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;
    
    public function owner()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'name', 'price', 'expiration', 'user_id',
        ];
       
    protected $casts = [
        'expiration' => 'date',
        ];
    

}
