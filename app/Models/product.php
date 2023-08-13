<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        // 'id',
        // 'product_name',
        // 'category_id',
        // 'description',
        // 'price',
        // 'quantity',
        // 'feature',
        // 'current_at',
        // 'uppdate_at',
        'id', 'product_name', 'category_id', 'quantity', 'curent_at'
    ];


    public function images(){
        return $this->hasMany(image::class, 'product_id');
    }
    public function category()
    {
        return $this->belongsTo(categories::class);
    }

}
