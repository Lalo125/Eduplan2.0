<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = Estudiante::paginate(5);
        return view('estudiante.index',['estudiantes' => $estudiante]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
         public function create()

        {
            $usuarios = DB::table('usuarios')
                ->select('USUARIO_ID', 'USERNAME')
                ->orderBy('USERNAME')
                ->get();
            
            $cursos = DB::table('cursos')
                ->select('CURSO_ID', 'NOMBRE_CURSO')
                ->orderBy('NOMBRE_CURSO')
                ->get();

                
                
            return view('estudiantes.create',['usuarios' => $usuarios,'cursos'=>$cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    {  $request->validate([
        "ESTUDIANTE_ID"     => 'required|unique:estudiantes',
        "NOMBRE_EST"     => 'required|unique:estudiantes',
        "APELLIDO1_EST"  => 'required|unique:estudiantes',
        "APELLIDO2_EST"  => 'required|unique:estudiantes',
        "RUT_EST"        => 'required|numeric' ,
      
        ]);
        db($request);exit();
        $estudiante = new estudiantes();
        $estudiante->ESTUDIANTE_ID       =null;
        $estudiante->NOMBRE_EST          =$request->NOMBRE_EST;
        $estudiante->APELLIDO1_EST       =$request->APELLIDO1_EST;
        $estudiante->APELLIDO2_EST       =$request->APELLIDO2_EST;
        $estudiante->RUT_EST             =$request->RUT_EST;

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
        $respuesta = Estudiante::destroy($id);
		
		if($respuesta){
			return redirect('/estudiantes')->with('success', 'Estudiante eliminado con éxito');
		}else{
			return redirect('/estudiantes')->with('warning', 'Ocurrio un error');
		}
		
    }
}
