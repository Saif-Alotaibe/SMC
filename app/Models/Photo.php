<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Photo extends Model
{
    use HasFactory, UuidTrait;

    protected $fillable = [
        'url'
    ];


    public function post(){
        $this->belongsTo(Post::class);
    }

}
