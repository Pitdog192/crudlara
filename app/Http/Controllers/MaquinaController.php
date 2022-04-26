<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $procesador = $request->get('buscaPro');
        $ram = $request->get('buscaRam');
        $win = $request->get('buscaWin');
        $area = $request->get('buscaAr');
        $sector = $request->get('buscaSec');
        $usuario = $request->get('buscaUs');
        $inv = $request->get('buscaInv');
        $maquinas = Maquina::procesador($procesador)
        ->ram($ram)
        ->windows($win)
        ->area($area)
        ->sector($sector)
        ->usuario($usuario)
        ->inventario($inv)
        ->paginate(60);
        return view('maquina.index', compact('maquinas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maquina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosMaquina = request()->except('_token');
        Maquina::insert($datosMaquina);
        return view('maquina.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('maquina.show',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maquina = Maquina:: findOrFail($id);
        return view('maquina.edit', compact('maquina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMaquina = request()->except(['_token', '_method']);
        Maquina::where ('id','=',$id)->update($datosMaquina);
        return redirect('/maquina');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Maquina::destroy($id);
        return redirect('maquina');
    }
}


