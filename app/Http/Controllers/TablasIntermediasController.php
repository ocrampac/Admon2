<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Area;
use App\Models\Campo;
use App\Models\Disciplina;
use App\Models\Subdisciplina;
use App\Models\Autor;


use Illuminate\Http\Request;

class TablasIntermediasController extends Controller
{
    public function articulo(Request $request )
    {
      //obtener id articulo
      $id_articulo=1;
      $autoresArticulo = Articulo::find($id_articulo)->autores()->orderBy('autor_id')->get();
      $nombre=$request->get('Nombre');
      //SELECT * FROM `autores` left join `articulo_autor`
      //on autores.id=articulo_autor.autor_id where articulo_autor.autor_id is null
      $autores=Autor::orderBy('id', 'desc')
      ->name($nombre) //igual a where name like %$nombre% Modelo Autor
      ->leftJoin('articulo_autor','autores.id','=','articulo_autor.autor_id')
      ->whereNull('articulo_autor.autor_id')
      ->paginate(1);
      //->get();
      //$autores =Autor::orderBy('id', 'desc')

      //return $autores;
      return view("agregaAutor",compact('autores','id_articulo'));
      //return $r;
    }

    public function index()
    {
      $autor=Autor::find(1);

      $area=Area::all();
      $campo=Campo::all();
      $disciplina=Disciplina::all();
      $subdisciplina=Subdisciplina::all();

      //Buscar en articulo_autor los autores donde articulo_id=1
      $autoresArticulo = Articulo::find(1)->autores()->orderBy('autor_id')->get();
      //Buscar todos los Autores
      $autores =Autor::orderBy('id', 'desc')->paginate(1);
      //return $roles;

      $articulo= Articulo::find(1);
      return view("Articulo",compact('autoresArticulo','articulo','autores','area','campo','disciplina','subdisciplina'));
      //return $autor;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function articuloInsertar(Request $request)
     {
       //Insertaremos registro en la tabla articulo_autor
       $articulo = Articulo::find($request->id_articulo);
       $articulo->autores()->attach($request->id_autor);
         //$producto=Producto::findOrFail($id);
         //$producto->delete();
       return redirect('/articulo')->with('mensaje', 'Autor colocado!');
       //return $request;

     }
    public function articuloEliminar(Request $request)
    {
      //Eliminamos de la tabla articulo_autor
      $articulo = Articulo::find($request->id_articulo);
      $articulo->autores()->detach($request->id_autor);
        //$producto=Producto::findOrFail($id);
        //$producto->delete();
      return redirect('/articulo')->with('mensaje', 'Autor eliminado!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $this->validate($request,['TituloArticulo'=>'required', 'NombreRevista' =>'required',
        'AñoPublicacion' =>'required', 'PaginaDe' =>'required',
        'PalabraClave' =>'required', 'PaginaA' =>'required',
        'PalabraClave2' =>'required', 'PalabraClave3' =>'required'
        ]);


        $entrada=$request->all();
        if ($request->hasFile('Archivo'))
        {
          $archivo=$request->file('Archivo');
          //Se guarda en storage/App/Autor1
          $nombre=$archivo->store('Autor1/Articulo');
          //$nombre=$archivo->getClientOriginalName();
          //$entrada->Archivo=$nombre;
        }
        Articulo::create($entrada);
        return $entrada;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
          $user = User::find($id);
          $action = URL::route('user.update', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
      //  $articulo=Articulo::findOrFail($id);
        $articulo->update($request->all());
        return redirect('/articulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
