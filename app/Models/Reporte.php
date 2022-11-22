<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reporte extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reporte';
    
    protected $fillable = [
        'fecha_Reporte',
        'descripcion',
        'estado_Reporte',
        'id_Maquina_FK',
        'identificacion_Usuario_FK'
    ];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Reporte(){
        return self::Estado[$this->estado_Reporte];
    }

    public function maquina(){
        return $this->belongsTo(Maquina::class, 'id_Maquina_FK');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'identificacion_Usuario_FK');
    }
}
