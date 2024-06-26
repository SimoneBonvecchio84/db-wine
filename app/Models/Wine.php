<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [

        "winery",
        "wine",
        "rating",
        "location",
        "image",
        "slug"

    ];

    public function aromas(){
        return $this->belongsToMany(Aroma::class);
    }
}
