<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'status',
    ];

    protected $casts = [
        'content' => 'json',
    ];

    public function isPending()
    {
        return $this->status == 'pending';
    }
}
