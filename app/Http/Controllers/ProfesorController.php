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
    {   $request->validate([
            "PROFESOR_ID"     => 'required|unique:profesores',
            "NOMBRE_PROF"     => 'required|unique:profesores',
            "APELLIDO1_PROF"  => 'required|unique:profesores',
            "APELLIDO2_PROF"  => 'required|unique:profesores',
            "RUT_PROF"        => 'required|numeric' ,          
            "Asignatura"      => 'required|unique:profesores',
            ]);
            db($request);exit();
            $profesores = new profesores();
            $profesores->PROFESOR_ID       =null;
            $profesores->NOMBRE_PROF       =$request->NOMBRE_PROF;
            $profesores->APELLIDO1_PROF    =$request->APELLIDO1_PROF;
            $profesores->APELLIDO2_PROF    =$request->APELLIDO2_PROF;
            $profesores->RUT               =$request->RUT;
            $profesores->Asignatura        =$request->Asignatura;


        //
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
