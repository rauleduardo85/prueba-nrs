<?php

namespace App\Repositories;

use App\Models\butacas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class butacasRepository
 * @package App\Repositories
 * @version May 10, 2018, 4:29 pm UTC
 *
 * @method butacas findWithoutFail($id, $columns = ['*'])
 * @method butacas find($id, $columns = ['*'])
 * @method butacas first($columns = ['*'])
*/
class butacasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fila',
        'columna',
        'observacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return butacas::class;
    }
}
