<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Maquina extends Model
{
    use HasFactory, SoftDeletes;
     //Representa una tabla en especifico
     protected $table = 'maquina';
     protected $fillable = [
         'nombre_Maquina',
         'proveedor',
         'cantidad',
         'lugar_Maquina',
         'estado_Maquina',
         'identificacion_Gerente_FK'
     ];
 
     protected $timestamp = false;
 
     public const Estado = ['Inactivo','Activo'];
 
     public function estado_Maquina(){
         return self::Estado[$this->estado_Maquina];
     }

     public function mantenimiento(){
        return $this->belongsTo(Mantenimiento::class, 'id_Mantenimiento_FK');
    }

    public function gerente(){
        return $this->belongsTo(Gerente::class, 'identificacion_Gerente_FK');
    }
}
