<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Area;
use App\Models\Campo;
use App\Models\Disciplina;
use App\Models\Subdisciplina;
use App\Models\Autor;


use Illuminate\Http\Request;

class p extends Controller
{
    public function articulo(Request $r )
    {
      //FALTA evitar que autores ya registrados
      $autoresArticulo = Articulo::find(1)->autores()->orderBy('autor_id')->get();
      $nombre=$r->get('Nombre');
      //SELECT * FROM `autores` left join `articulo_autor`
      //on autores.id=articulo_autor.autor_id where articulo_autor.autor_id is null
      $autores=Autor::orderBy('id', 'desc')
      ->name($nombre)
      ->leftJoin('articulo_autor','autores.id','=','articulo_autor.autor_id')
      ->whereNull('articulo_autor.autor_id')
      ->paginate(1);
      //->get();
      //$autores =Autor::orderBy('id', 'desc')
    //  ->name($nombre);
    //  ->leftJoin($autoresArticulo);
      //->paginate(1);

      //return $autores;
    return view("agregaAutor",compact('autores'));
      //return $r;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'csdsd';
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
