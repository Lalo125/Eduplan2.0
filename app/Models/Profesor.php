<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey = 'PROFESOR_ID';
    public $timestamps = false;
    //Cambiar por atributos de la tabla
    protected $fillable = [
        'PROFESOR_ID',
        'NOMBRE_PROF',
        'APELLIDO1_PROF',
        'APELLIDO2_PROF',
        'RUT_PROF',
        'CORREO_PROF',
        'CONTRASENA_PROF',
        'TIPO_PROF',
    ];
}
