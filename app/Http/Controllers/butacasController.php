<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebutacasRequest;
use App\Http\Requests\UpdatebutacasRequest;
use App\Repositories\butacasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class butacasController extends AppBaseController
{
    /** @var  butacasRepository */
    private $butacasRepository;

    public function __construct(butacasRepository $butacasRepo)
    {
        $this->butacasRepository = $butacasRepo;
    }

    /**
     * Display a listing of the butacas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->butacasRepository->pushCriteria(new RequestCriteria($request));
        $butacas = $this->butacasRepository->all();

        return view('butacas.index')
            ->with('butacas', $butacas);
    }

    /**
     * Show the form for creating a new butacas.
     *
     * @return Response
     */
    public function create()
    {
        return view('butacas.create');
    }

    /**
     * Store a newly created butacas in storage.
     *
     * @param CreatebutacasRequest $request
     *
     * @return Response
     */
    public function store(CreatebutacasRequest $request)
    {
        $input = $request->all();



        $fila = $input['fila'];
        $columna = $input['columna'];

        $validarExiste = $this->butacasRepository->findWhere(['fila' => $fila, 'columna' => $columna]);

        if(count($validarExiste) > 0)
        {
            Flash::error('Ya existe la butaca con la fila n°' . $fila . ' y columna n° ' . $columna);

            return redirect(route('butacas.store'));
        }
        else{
            $butacas = $this->butacasRepository->create($input);

            Flash::success('Butacas saved successfully.');

            return redirect(route('butacas.index'));
        }

    }

    /**
     * Display the specified butacas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $butacas = $this->butacasRepository->findWithoutFail($id);

        if (empty($butacas)) {
            Flash::error('Butacas not found');

            return redirect(route('butacas.index'));
        }

        return view('butacas.show')->with('butacas', $butacas);
    }

    /**
     * Show the form for editing the specified butacas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $butacas = $this->butacasRepository->findWithoutFail($id);

        if (empty($butacas)) {
            Flash::error('Butacas not found');

            return redirect(route('butacas.index'));
        }

        return view('butacas.edit')->with('butacas', $butacas);
    }

    /**
     * Update the specified butacas in storage.
     *
     * @param  int              $id
     * @param UpdatebutacasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebutacasRequest $request)
    {
        $butacas = $this->butacasRepository->findWithoutFail($id);

        if (empty($butacas)) {
            Flash::error('Butacas not found');

            return redirect(route('butacas.index'));
        }



        $input = $request->all();

        $fila = $input['fila'];
        $columna = $input['columna'];

        $validarExiste = $this->butacasRepository->findWhere(['fila' => $fila, 'columna' => $columna]);



        if($validarExiste[0]->id !== $butacas['id'])
        {
            Flash::error('Ya existe la butaca con la fila n°' . $fila . ' y columna n° ' . $columna);
            return redirect(route('butacas.store'));
        }
        else{
            $butacas = $this->butacasRepository->update($input, $id);

            Flash::success('Butacas updated successfully.');

            return redirect(route('butacas.index'));
        }


    }

    /**
     * Remove the specified butacas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $butacas = $this->butacasRepository->findWithoutFail($id);

        if (empty($butacas)) {
            Flash::error('Butacas not found');

            return redirect(route('butacas.index'));
        }

        $this->butacasRepository->delete($id);

        Flash::success('Butacas deleted successfully.');

        return redirect(route('butacas.index'));
    }
}
