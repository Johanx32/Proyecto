<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValoracionFisica extends Model
{
    use HasFactory;
    protected $table = 'valoracion_fisica';
    protected $fillable = [
    'peso',
    'estatura',
    'descripcion_Medidas',
    'imc',
    'fecha_Valoracion',
    'estado_Valoracion'
    ];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Valoracion(){
        return self::Estado[$this->estado_Valoracion];
    }
}
