<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comandas extends Model
{
    //

    public function mesa () {
        return $this->belongsTo(Mesas::class);
    }

    public function estados () {
        return $this->belongsTo(Estados::class);
    }
    
    public function mesero () {
        return $this->belongsTo(Meseros::class);
    }
}
