<?php

namespace App\Repositories;

use App\Models\Usuarios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version May 10, 2018, 3:42 pm UTC
 *
 * @method Usuarios findWithoutFail($id, $columns = ['*'])
 * @method Usuarios find($id, $columns = ['*'])
 * @method Usuarios first($columns = ['*'])
*/
class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apellidos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuarios::class;
    }
}
