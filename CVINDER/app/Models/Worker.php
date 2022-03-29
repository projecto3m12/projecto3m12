<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Academic;
use App\Models\Experience;
use App\Models\OfferWorker;
use App\Models\SkillWorker;

class Worker extends Model
{
    use HasFactory;

    public function experience(){
        $this->hasMany(Experience::class);
    }

    public function academic(){
        $this->hasMany(Academic::class);
    }

    public function province(){
        $this->belongsTo(Province::class);
    }

    public function matches(){
        $this->hasMany(OfferWorker::class);
    }

    public function skillWorkers() {
        $this->hasMany(SkillWorker::class);
    }
}
