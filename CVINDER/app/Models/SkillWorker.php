<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;
use App\Models\Skill;

class SkillWorker extends Model
{
    use HasFactory;

    public function worker(){
        $this->belongsTo(Worker::class);
    }

    public function skills(){
        $this->belongsTo(Skill::class);
    }
}
