<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;

class Academic extends Model
{
    use HasFactory;

    //para dar formato a la migracion
    protected $casts = [
        'yearStart' => 'datetime:mm/yy',
        'yearEnd' => 'datetime:mm/yy',
    ];

    public function worker(){
        $this->belongsTo(Worker::class);
    }

}
