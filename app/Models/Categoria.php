<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = "idCategoria"; // ESPECIFICAR LA LLAVE PRIMARIA

    public function bebidas () {
        return $this->hasMany(Bebidas::class, 'idCategoriaBebida', 'idCategoria');
    }
}
