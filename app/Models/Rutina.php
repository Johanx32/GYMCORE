<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Rutina extends Model
{
   use HasFactory , SoftDeletes;
   protected $table = 'rutina';
   protected $fillable = [
       'nombre_Rutina',
       'objetivo',
       'estado_Rutina',
       'id_Ejercicio_FK',
       'identificacion_Entrenador_FK',
       'identificacion_Cliente_FK'
   ];

   protected $timestamp = false;

   public const Estado = ['Inactivo','Activo'];

   public function estado_Rutina(){
       return self::Estado[$this->estado_Rutina];
   }

   public function ejercicio(){
     return $this->belongsTo(Ejercicio::class, 'id_Ejercicio_FK');
    }

    
    public function entrenador(){
        return $this->belongsTo(Entrenador::class, 'identificacion_Entrenador_FK');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'identificacion_Cliente_FK');
    }
}
