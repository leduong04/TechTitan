<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed_back extends Model
{
    protected $table = 'feed_back';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        
        'id', 'full_name', 'email', 'message', 'current_at'
    ];
    use HasFactory;
}
