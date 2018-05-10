<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Usuarios
 * @package App\Models
 * @version May 10, 2018, 3:42 pm UTC
 *
 * @property string nombres
 * @property string apellidos
 */
class Usuarios extends Model
{

    public $table = 'usuarios';
    


    public $fillable = [
        'nombres',
        'apellidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombres' => 'string',
        'apellidos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required',
        'apellidos' => 'required'
    ];

    
}
