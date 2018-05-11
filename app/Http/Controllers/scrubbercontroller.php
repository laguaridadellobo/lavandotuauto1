<?php

namespace App\Http\Controllers;
use App\Scrubber;
use Illuminate\Http\Request;
use Validator;

class scrubbercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $scrubbers = Scrubber::all();
      return view( 'system.base.index', [
        'data' => $scrubbers,
        'type' => "Lavadore",
        'model' => "highscrubber",
        'text_section' => "Vista de Lavador",
        'columns' => [
          'Nombre' => 'name',
          'Apellido' => 'last',
          'E-mail' => 'mail',
          'Tipo' => 'typeuser',
          'Telefono' => 'phone',
        ],
      ]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('system.highscrubber.create');
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
        'mail'=>'required|email|unique:scrubbers',
        'phone'=>'required|integer|digits:10',

    ]);
    $scrubber= new Scrubber();
    $scrubber->name = $request->name;
    $scrubber->last = $request->last;
    $scrubber->mail = $request->mail;
    $scrubber->phone = $request->phone;
    $scrubber->pass = $request->pass;
    $scrubber->save();
    return view('image',[
      'id'=>$scrubber->id,
      'scrubber'=>$scrubber,
      'model' => "Scrubber",
      'ruta' => "highscrubber",
      'type' => "Lavador",

    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $scrubber = Scrubber::find($id);
      return view('scrubber.show',['scrubber'=>$scrubber]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $highuser = Scrubber::find($id);
      return view('system.highscrubber.edit',['highuser'=>$highuser]);
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
      $highuser = Scrubber::where('id', $id);
      $highuser->update([
        'name' => $request->name,
        'last' => $request->last,
        'mail' => $request->mail,
        'phone' => $request->phone,
        'pass' => $request->pass,


      ]);
      return redirect('/system/highscrubber/')->with('msg', 'Se actualizo con exito ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Scrubber::find($id)->delete();
      return redirect('/system/highscrubber/')->with('msg', 'Se Elimino con exito ');
    }
}
