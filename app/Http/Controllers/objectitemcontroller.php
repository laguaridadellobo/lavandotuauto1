<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objectitem;

use App\images as ModelImages;
use Validator;
use Session;
use App\Http\Requests;

class objectitemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $highusers = Objectitem::all();
      return view( 'system.base.index', [
          'data' => $highusers,
          'type' => "Objeto",
          'model' => "objectitem",
          'id' => "idh",
          'text_section' => "Vista de Objetos de Valor",
          'columns' => [
            'Computadora' => 'computer',
            'Documentos' => 'documents',
            'Telefono' => 'phone',
            'Mochila' => 'bag',
            'Reloj' => 'watch',
          ],
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('system.objectitem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $highuser= new Objectitem();
      $highuser->computer = $request->computadora;
      $highuser->purse = $request->bolso;
      $highuser->documents = $request->documentos;
      $highuser->keys = $request->llaves;
      $highuser->suitcase = $request->portafolio;
      $highuser->bag = $request->mochila;
      $highuser->ropa = $request->ropa;
      $highuser->watch = $request->reloj;
      $highuser->phone = $request->telefono;
      $highuser->other = $request->otros;
      $highuser->save();

return redirect()->route("objectitem.index")->with('msg','Se ah creado con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $highuser = Objectitem::find($id);
      return view('objectitems.show',['highuser'=>$highuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $highuser = Objectitem::find($id);
      return view('system.objectitem.edit',['highuser'=>$highuser]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $highuser = Objectitem::where('id', $id);
      $highuser->update([
        'computer' => $request->computadora,
        'purse' => $request->bolso,
        'documents' => $request->documentos,
        'keys' => $request->llaves,
        'suitcase' => $request->portafolio,
        'bag' => $request->mochila,
        'ropa' => $request->ropa,
        'watch' => $request->reloj,
        'phone' => $request->telefono,
        'other' => $request->otros,

      ]);
      return redirect('/system/objectitem/')->with('msg', 'Se actualizo con exito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
