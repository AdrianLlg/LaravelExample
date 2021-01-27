<?php

namespace App\Models;

use App\Http\Controllers\ContratosController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    public function contrato(){
        return $this->belongsTo(Contratos::class);
    }
}
