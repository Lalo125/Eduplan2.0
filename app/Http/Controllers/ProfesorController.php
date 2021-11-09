<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request,
Illuminate\Support\Facades\DB;

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
        $usuarios = DB::table('usuarios')
            ->select('USUARIO_ID', 'USERNAME')
			->orderBy('USERNAME')
            ->get();
        
        $asignaturas = DB::table('asignaturas')
            ->select('ASIGNATURA_ID', 'NOMBRE_ASIG')
			->orderBy('NOMBRE_ASIG')
            ->get();
            
        return view('profesores.create',['usuarios' => $usuarios,'asignaturas'=>$asignaturas]);
        
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
        
    
       'USUARIO_ID'     =>'required',
       'ASIGNATURA_ID'  =>'required',  
       'NOMBRE_PROF'    =>'required',
       'APELLIDO1_PROF' =>'required',
       'APELLIDO2_PROF' =>'required',
       'RUT_PROF'       =>'required', 
      
 

    ]) ;
    //dd($request);exit();
    $profesor = new Profesor();
    
    $profesor ->PROFESOR_ID       = null;
    $profesor-> ASIGNATURA_ID     = $request-> ASIGNATURA_ID;
    $profesor-> USUARIO_ID        = $request-> USUARIO_ID;
    $profesor-> APELLIDO1_PROF    = $request-> APELLIDO1_PROF;
    $profesor-> APELLIDO2_PROF    = $request-> APELLIDO2_PROF;
    $profesor-> RUT_PROF          = $request-> RUT_PROF;
    $profesor-> NOMBRE_PROF       = $request-> NOMBRE_PROF;


    $respuesta = $profesor->save();
       if($respuesta){
           return redirect('/profesores')->with('success', 'Profesor registrado con exito');
       }else{
           return redirect('/profesores/create')->with('warning', 'Ocurrio un error');
       }
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

            $profesor = Profesor::where('PROFESOR_ID', $id)->first();
            
    $usuarios = DB::table('usuarios')
            ->select('USUARIO_ID','USERNAME')
            ->get() ;

            $asignaturas = DB::table('asignaturas')
            ->select('ASIGNATURA_ID','NOMBRE_ASIG')
            ->get() ;


        return view ('profesores.edit',
        ['profesor'=>$profesor,
         'usuarios'=>$usuarios,
         'asignaturas'=>$asignaturas
         ]);
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
        $request->validate([
        
    
            'USUARIO_ID'     =>'required',
            'ASIGNATURA_ID'  =>'required',  
            'NOMBRE_PROF'    =>'required',
            'APELLIDO1_PROF' =>'required',
            'APELLIDO2_PROF' =>'required',
            'RUT_PROF'       =>'required', 
           
      
     
         ]) ;
         //dd($request);exit();
         $profesor = new Profesor();
         
         $profesor ->PROFESOR_ID       = null;
         $profesor-> ASIGNATURA_ID     = $request-> ASIGNATURA_ID;
         $profesor-> USUARIO_ID        = $request-> USUARIO_ID;
         $profesor-> APELLIDO1_PROF    = $request-> APELLIDO1_PROF;
         $profesor-> APELLIDO2_PROF    = $request-> APELLIDO2_PROF;
         $profesor-> RUT_PROF          = $request-> RUT_PROF;
         $profesor-> NOMBRE_PROF       = $request-> NOMBRE_PROF;
            //dd($profesor);exit();
         $respuesta = Profesor::where('PROFESOR_ID', $id)
         ->update(
             ['ASIGNATURA_ID'  	       =>$profesor->ASIGNATURA_ID,
              'USUARIO_ID'		       =>$profesor->USUARIO_ID,
              'APELLIDO1_PROF'	       =>$profesor->APELLIDO1_PROF,
              'APELLIDO2_PROF'	       =>$profesor->APELLIDO2_PROF,
              'RUT_PROF'		       =>$profesor->RUT_PROF,
              'NOMBRE_PROF'            =>$profesor->NOMBRE_PROF,

         ]);
         if($respuesta){
			return redirect('/profesores')->with('success', 'profesor actualizado con éxito');
		}else{
			return redirect('/profesores')->with('warning', 'No se pudo actualizar este profesor');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
		 $respuesta = Profesor::destroy($id);
		
		if($respuesta){
			return redirect('/profesores')->with('success', 'Profesor eliminado con éxito');
		}else{
			return redirect('/profesores')->with('warning', 'Ocurrio un error');
		}
		
    }
}
