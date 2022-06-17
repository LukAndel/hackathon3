<?php

namespace App\Models;


use App\Models\Owner;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
