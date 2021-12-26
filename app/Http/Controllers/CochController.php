<?php

namespace App\Http\Controllers;

use App\Models\Coch;
//Uso el modelo propietario
use App\Models\Propietario;
use Illuminate\Http\Request;

/**
 * Class CochController
 * @package App\Http\Controllers
 */
class CochController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coch::paginate();

        return view('coch.index', compact('coches'))
            ->with('i', (request()->input('page', 1) - 1) * $coches->perPage());
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coch = new Coch();
        //traigo los valores de propietarios y los guardo en una variable
        $propietarios = Propietario::pluck('nombre','id');
        //los traslado a la vista
        return view('coch.create', compact('coch', 'propietarios'));
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coch::$rules);

        $coch = Coch::create($request->all());

        return redirect()->route('coches.index')
            ->with('success', 'Coche agregado');
    }

    /**
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coch = Coch::find($id);

        return view('coch.show', compact('coch'));
    }

    /**
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coch = Coch::find($id);
        $propietarios = Propietario::pluck('nombre','id');
        return view('coch.edit', compact('coch', 'propietarios'));
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @param  Coch $coch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coch $coch)
    {
        request()->validate(Coch::$rules);

        $coch->update($request->all());

        return redirect()->route('coches.index')
            ->with('success', 'Coche actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coch = Coch::find($id)->delete();

        return redirect()->route('coches.index')
            ->with('success', 'Coche eliminado');
    }

    public function formdata(){
    $data = Input::get('data1');

    //somecodes

    return ['success' => true, 'data' => $data];

}
    
    
}
