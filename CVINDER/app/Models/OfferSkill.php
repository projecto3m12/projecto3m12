<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;
use App\Models\Skill;

class OfferSkill extends Model
{
    use HasFactory;

    public function offer(){
        $this->belongsTo(Offer::class);
    }

    public function skill(){
        $this->belongsTo(Skill::class);
    }

}
