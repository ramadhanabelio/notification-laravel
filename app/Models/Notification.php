<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
