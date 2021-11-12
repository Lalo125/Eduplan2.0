<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
	Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( session()->exists('usuario_id') and session()->exists('username') ){
			session()->flush();
			return redirect('/login')->with('warning', 'no se cuentra el usuario');
		}
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
			'usuario'     	=> 'required|email',
			'password'      => 'required'
		]);
		$user		= $request->usuario;
		$password	= $request->password;
		
		$users = DB::table('usuarios')
             ->select('USUARIO_ID','USERNAME')
             ->where('USERNAME', '=', $user)
			 ->where('PASSWORD','=',$password)
             ->get()
             ->first();
             //dd($users);exit();
             if ($users != ''){
				 
                if ($users->USUARIO_ID > 0 and $users->USERNAME!=''){
					
					session(['usuario_id' => $users->USUARIO_ID,'username'=>$users->USERNAME]);
					//echo session()->get('usuario_id').' '.session()->get('username');exit();
					
                    return redirect('/profesores')->with('success', 'BIENVENIDO!!!');
                }else{ 
                    return redirect('/login')->with('warning', 'no se cuentra el usuario');
					//echo 'fail';
                }
            }else{
				return redirect('/login')->with('warning', 'no se cuentra el usuario');
			}
   
		//Verificiar que $users tenga datos
		//Si $users tiene datos hay que crear las sessiones
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        
    }
}
