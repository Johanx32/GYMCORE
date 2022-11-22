<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ejercicio extends Model
{
    use HasFactory, SoftDeletes;
    //Representa una tabla en especifico
    protected $table = 'ejercicio';
    protected $fillable = [
        'nombre_Ejercicio',
        'tiempo_Ejercicio',
        'series_Ejercicio',
        'musculos_Involucrados',
        'ejemplo_Ejercicio',
        'estado_Ejercicio'
    ];

    protected $timestamp = false;

    public function rutina(){
        $this->belongsTo(Rutina::class);
    }

    public const Estado = ['Inactivo','Activo'];

    public function estado_Ejercicio(){
        return self::Estado[$this->estado_Ejercicio];
    }
}
