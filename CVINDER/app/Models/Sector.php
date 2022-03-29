<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;

class Sector extends Model
{
    use HasFactory;

    public function offer(){
        $this->hasMany(Offer::class);
    }
}
