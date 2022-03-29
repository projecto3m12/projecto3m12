<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enterprise;
use App\Models\Sector;
use App\Models\OfferWorker;
use App\Models\OfferSkill;

class Offer extends Model
{
    use HasFactory;

    public function enterprise(){
        $this->belongsTo(Enterprise::class);
    }

    public function sector(){
        $this->belongsTo(Sector::class);
    }
    
    public function matches(){
        $this->hasMany(OfferWorker::class);
    }

    public function offerSkills(){
        $this->hasMany(OfferSkill::class);
    }
}
