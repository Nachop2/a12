<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'writer_id',
    ];

    public function writer()
    {
        return $this->belongsTo(User::class);
    }
}
