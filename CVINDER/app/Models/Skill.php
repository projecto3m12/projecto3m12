<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OfferSkill;
use App\Models\SkillWorker;

class Skill extends Model
{
    use HasFactory;

    public function OfferSkill(){
        $this->hasMany(OfferSkill::class);
    }

    public function skillWorker(){
        $this->hasMany(SkillWorker::class);
    }
}
