<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\noticia;

use Illuminate\Support\Facades\Storage;




class noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'titulo'=>'required',
            'descripcion'=> 'required',

            ]);

        $noticia = new noticia();
        $noticia->titulo=$request->titulo;
        $noticia->descripcion=$request->descripcion;

        $img = $request->file('UrlImg');
        $file_route = $img->getClientOriginalName();

        Storage::disk('imgnoticias')->put($file_route, file_get_contents($img->getRealPath()));



        $noticia->URLIMG=$file_route;

        if($noticia->save()){

        return back()->with('msj','datos guardados');
        }else{
            return back()->with('msj2','no se guardaron los datos');

        }
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
