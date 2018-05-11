<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Enterprice;
use App\images as ModelImages;
use Validator;
use Session;
use App\Http\Requests;

class enterpricecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $highusers = Enterprice::all();
      return view( 'system.base.index', [
          'data' => $highusers,
          'type' => "Empresa",
          'model' => "enterprice",
          'id' => "id",
          'text_section' => "Vista de Empresa",
          'columns' => [
            'Nombre' => 'name',
            'RFC' => 'rfc',
            'Correo' => 'mail',
            'Telefono' => 'phone',
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
      return view ('system.enterprice.create');

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
            'mail'=>'required|email|unique:enterprices',
            'phone'=>'required|digits:10',
            'rfc' => array('required',
			'regex:/^[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}$/'),

        ]);
          $highuser= new Enterprice();
          $highuser->name = $request->name;
          $highuser->rfc = $request->rfc;
          $highuser->mail = $request->mail;
          $highuser->phone = $request->phone;
          $highuser->description = $request->description;

          $highuser->save();

          return redirect()->route("enterprice.index")->with('msg','Se ah creado con exito.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $highuser = Enterprice::find($id);
      return view('enterprice.show',['highuser'=>$highuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $highuser = Enterprice::find($id);
      return view('system.enterprice.edit',['highuser'=>$highuser]);
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
			'name'=>'required|regex:/^([A-Z]{1}[a-z\s]*)+$/',
            'phone'=>'required|digits:10',
            'rfc' => array('required',
			'regex:/^[A-Z]{4}[0-9]{6}[A-Z,0-9]{3}$/'),

        ]);
      $highuser = Enterprice::where('id', $id);
      $highuser->update([
        'name' => $request->name,
        'rfc' => $request->rfc,
        'mail' => $request->mail,
        'phone' => $request->phone,
        'description' => $request->description,


      ]);
      return redirect('/system/enterprice/')->with('msg', 'Se actualizo con exito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Enterprice::find($id)->delete();
      return redirect('/system/enterprice/')->with('msg', 'Se Elimino con exito ');
    }
}
