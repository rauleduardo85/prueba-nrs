<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class butacas
 * @package App\Models
 * @version May 10, 2018, 4:29 pm UTC
 *
 * @property integer fila
 * @property integer columna
 * @property string observacion
 */
class butacas extends Model
{

    public $table = 'butacas';
    


    public $fillable = [
        'fila',
        'columna',
        'observacion',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fila' => 'integer',
        'columna' => 'integer',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fila' => 'required|numeric',
        'columna' => 'required|numeric',

    ];

    
}
