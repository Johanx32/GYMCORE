<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gerente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'gerente';
    protected $fillable = [
                            'nombre_Geren',
                            'apellido_Geren',
                            'fecha_Nac_Geren',
                            'telefono_Geren',
                            'direccion_Geren',
                            'identificacion_Usuario_FK'];

   public function usuario(){
        return $this->belongsTo(User::class, 'identificacion_Usuario_FK');
    }

}
