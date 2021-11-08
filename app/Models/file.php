<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'name',
        'img_path',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, );
    }

}
