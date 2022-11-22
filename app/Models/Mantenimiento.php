<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mantenimiento extends Model
{
    use HasFactory, SoftDeletes;

    //Representa una tabla en especifico
    protected $table = 'mantenimiento';
    protected $fillable = [
        'tipo_Mantenimiento',
        'diagnostico_Manteni',
        'fecha_Inicio',
        'fecha_Fin',
        'estado_Mantenimiento',
        'id_Maquina_FK'
    ];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Mantenimiento(){
        return self::Estado[$this->estado_Mantenimiento];
    }

  

}
