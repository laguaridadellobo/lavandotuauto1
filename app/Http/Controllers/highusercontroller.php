<?php

namespace App\Http\Controllers;

use App\Highuser;
use App\images as ModelImages;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\Http\Requests;

class highusercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $highusers = Highuser::all();
      return view( 'system.base.index', [
        'data' => $highusers,
        'type' => "Usuario",
        'model' => "highuser",
        'id' => "idh",
        'text_section' => "Vista de usuario",
        'columns' => [

          'Nombre' => 'name',
          'Apellido' => 'last',
          'E-mail' => 'mail',
          'Tipo' => 'typeuser',
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
        return view ('system.highuser.create');
    }

    public function dropzoneStore(Request $request)
       {
           $message = 'Fail';
           $image = $request->file('file');
           $entity_id = $request->input('entity_id');
           $model = $request->input('model');
           $gallery = (!empty($request->input('gallery'))) ? true : false;
           $imageName = time().$image->getClientOriginalName();
           $image->move(public_path('images'),$imageName);
           //return response()->json(['success'=>$imageName]);
           if(!$gallery){
             $entity = $model::findOrFail($entity_id);
             if($entity){
               $message = "ok";
               $entity->photo = $imageName;
               $entity->save();
             }
           }
           if($gallery){
             $entity = $model::findOrFail($entity_id);
             if($entity){
               $message = "ok";
               $image = new ModelImages();
               $image->name = $imageName;
               $image->model = $model;
               $image->idmodel = $entity_id;
               $image->save();
             }
           }

           return $message.'name: '.$imageName;
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
	  'last'=>'required|regex:/^([A-Z]{1}[a-z\s]*)+$/',
      'mail'=>'required|email|unique:highusers',
      'phone'=>'required|integer|digits:10',

	]);
    $highuser= new Highuser();
    $highuser->name = $request->name;
    $highuser->last = $request->last;
    $highuser->mail = $request->mail;
    $highuser->phone = $request->phone;
    $highuser->sex = $request->sex;
    $highuser->pass = $request->pass;
    $highuser->save();
    return view('image',[
      'id'=>$highuser->id,
      'highuser'=>$highuser,
      'model' => "highuser",
      'type' => "cliente",
      'ruta' => "highuser",
    ]);
//    return redirect()->route("highuser.index")->with('msg','Se ah creado con exito este usuario.');

  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $highuser = Highuser::find($id);
      return view('highusers.show',['highuser'=>$highuser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $highuser = Highuser::find($id);
        return view('system.highuser.edit',['highuser'=>$highuser]);
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
	  'last'=>'required|regex:/^([A-Z]{1}[a-z\s]*)+$/',
      'phone'=>'required|integer|digits:10',

	]);
            $highuser = Highuser::where('id', $id);
            $highuser->update([
              'name' => $request->name,
              'last' => $request->last,
              'mail' => $request->mail,
              'phone' => $request->phone,
              'pass' => $request->pass,
              'sex' => $request->sex,

            ]);
            return redirect('/system/highuser/')->with('msg', 'Se actualizo con exito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //$highuser = Highuser::findOrFail($id);
      //$highuser->delete();
      Highuser::find($id)->delete();
      return redirect('/system/highuser/')->with('msg', 'Se Elimino con exito ');
    }









}
