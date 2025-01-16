<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meseros extends Model
{
    //

    public function comandas () {
        return $this->hasMany(Comandas::class);
    }
}
