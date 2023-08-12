<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = 'orders'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'fullname', 'email', 'user_id', 'address', 'phone', 'total_pay', 'status'
    ];

    // Các tương tác với cơ sở dữ liệu khác (nếu cần)
}

