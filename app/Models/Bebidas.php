<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    protected $primaryKey = "idBebida"; // ESPECIFICAR LA LLAVE PRIMARIA

    public function categorias () {
        return $this->belongsTo(Categoria::class, 'idCategoriaBebida', 'idCategoria');
    }
}
