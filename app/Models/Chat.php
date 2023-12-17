<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    public function penerima()
    {
        return $this->belongsTo(User::class,'penerima_id');
    }

    public function pengirim()
    {
        return $this->belongsTo(User::class,'pengirim_id');
    }

}
