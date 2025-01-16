<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $primaryKey = "idEstado"; // ESPECIFICAR LA LLAVE PRIMARIA

    public function comandas () {
        return $this->hasMany(Comandas::class,);
    }
}
