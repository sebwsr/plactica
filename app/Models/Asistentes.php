<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistentes extends Model
{
    protected $table = 'asistentes';
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        //S'evento_id',
        
        
     ];
    //
}
