<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function description(){
        return $this->hasMany(DescriptionDevis::class);
    }
}
