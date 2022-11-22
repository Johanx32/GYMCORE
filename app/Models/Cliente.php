<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'cliente';
    protected $fillable = [
    'nombre_Clie',
    'apellido_Clie',
    'fecha_Nac_Clie',
    'telefono_Clie',
    'direccion_Clie',
    'estado_Clie',
    'id_valoracionFisica_FK',
    'identificacion_Usuario_FK'];

    protected $timestamp = false;

    public const Estado = ['Inactivo','Activo'];

    public function estado_Clie(){
        return self::Estado[$this->estado_Clie];
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'identificacion_Usuario_FK');
    }
}
