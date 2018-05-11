<?php

namespace App\Http\Controllers;

use App\Promotions;
use App\images as ModelImages;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\Http\Requests;

class promotionscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $promotions = Promotions::all();
      return view( 'system.base.index', [
        'data' => $promotions,
        'type' => "Promocione",
        'model' => "promotions",
        'id' => "idp",
        'text_section' => "Vista de Promocione",
        'columns' => [

          'Nombre' => 'nombre',
          'Precios' => 'precios',

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
      return view ('system.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
		'name'=>'required|regex:/^([A-Z]{1}[a-z\s]*)+$/',
        'last'=>'required|numeric',


    ]);
      $highuser= new Promotions();
      $highuser->nombre = $request->name;
      $highuser->precios = $request->last;
      $highuser->save();
      return redirect()->route("promotions.index")->with('msg','Se ah creado con exito esta promocion.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $highuser = Promotions::find($id);
      return view('promotions.show',['highuser'=>$highuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $highuser = Promotions::find($id);
      return view('system.promotions.edit',['highuser'=>$highuser]);
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
		 $this->validate($request,[
			'nombre'=>'required|regex:/^([A-Z]{1}[a-z\s]*)+$/',
			'precios'=>'required|numeric',

        ]);
		
      $highuser = Promotions::where('id', $id);
      $highuser->update([
        'nombre' => $request->nombre,
        'precios' => $request->precios,

      ]);
      return redirect('/system/promotions/')->with('msg', 'Se actualizo con exito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Promotions::find($id)->delete();
      return redirect('/system/promotions/')->with('msg', 'Se Elimino con exito ');
    }
}
