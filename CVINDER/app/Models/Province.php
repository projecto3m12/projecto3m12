<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;

class Province extends Model
{
    use HasFactory;

    public function worker(){
        $this->hasMany(Worker::class);
    }
}
