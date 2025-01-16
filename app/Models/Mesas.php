<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    //
    // protected $table = "mesas"; // ESPECIFICAR LA TABLA
    protected $primaryKey = "idMesa"; // ESPECIFICAR LA LLAVE PRIMARIA


    public function comandas () {
        return $this->hasMany(Comandas::class);
    }
}
