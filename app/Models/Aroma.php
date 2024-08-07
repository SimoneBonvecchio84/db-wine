<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aroma extends Model
{
    use HasFactory;

    protected $fillable = ['aromi'];

    public function wines(){
        return $this->belongsToMany(Wine::class);
    }
}
