<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::paginate(7);
        return view('profesores.index',['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
        'NOMBRE_PROF'    =>'required',
        'APELLIDO1_PROF' =>'required',
        'APELLIDO2_PROF' =>'required',
        'RUT_PROF'       =>'required',  

     ]) ;
     //dd($request);exit();
     $profesor = new Profesor();
     
     $profesor ->PROFESOR_ID    = null;
     $profesor-> NOMBRE_PROF    = $request-> NOMBRE_PROF;
     $profesor-> APELLIDO1_PROF = $request-> APELLIDO1_PROF;
     $profesor-> APELLIDO2_PROF = $request-> APELLIDO2_PROF;
     $profesor-> RUT_PROF       = $request-> RUT_PROF;

     $respuesta = $profesor->save();
        if($respuesta){
            return redirect('/profesores')->with('success', 'Profesor registrado con exito');
        }else{
            return redirect('/profesores/create')->with('warning', 'Ocurrio un error');
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
        return 'Edit '.$id;
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
        return 'Destroy '.$id;
    }
}
