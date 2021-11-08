<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'ESTUDIANTE_ID';
    public $timestamps = false;
    //Cambiar por atributos de la tabla
    protected $fillable = [
        'ESTUDIANTE_ID',
        'CURSO_ID',
        'NOMBRE_EST',
        'APELLIDO1_EST',
        'APELLIDO2_EST',
        'RUT_EST',
        'CORREO_EST',
        'CONTRASENA_EST',
        'TIPO_EST',
    ];
}
