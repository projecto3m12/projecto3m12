<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;
use App\Models\Worker;

class OfferWorker extends Model
{
    use HasFactory;

    public function worker(){
        $this->belongsTo(Worker::class);
    }

    public function offer(){
        $this->belongsTo(Offer::class);
    }
}
