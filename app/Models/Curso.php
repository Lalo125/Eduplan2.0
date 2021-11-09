<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $primaryKey = 'CURSO_ID';
    public $timestamps = false;
    //Cambiar por atributos de la tabla
    protected $fillable = [
        'CURSO_ID',
        'NOMBRE_CURSO',
    ];
}
