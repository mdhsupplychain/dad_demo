<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use App\Usuarios;
use App\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AccesoController extends Controller
{
    public function login()
    {
        return view('acceso.login');
    }
    public function login_post_ad(Request $request)
    {
        
        $this->validate
        (
            $request,
            [
                'user'=>'required',
                'pass'=>'required'
            ],
            [
                'user.required'=>'El campo Usuario está vacío',
                'pass.required'=>'El campo Contraseña está vacío',
            ]
        );
        //implementación AD
        $ad=Helpers::active_directory($request->input('user'), $request->input('pass'));
        if($ad['estado']=='0')
        {
            $request->session()->flash('css', 'danger');
            $request->session()->flash('mensaje', $ad['mensaje']);
            return redirect()->route('acceso_login');exit;
        }
        //validación si existe o no el usuario
        $datos = User::where('email',$ad['mail'])->get();
        $i=0;
        $correo="";
        foreach($datos as $key=>$dato)
        {
            $correo=$dato->email;
            $i++;
        }
        if($i==0)
        {
            die("no no no no ".$ad['mail']);//se crea el usuario nuevo
        }else
        {
            if($ad['mail']==$correo)
            {
                echo "si<br />mail=".$ad['mail'].'<br />correo='.$correo;//se actualiza la contraseña
            }else
            {
                echo "no no no<br />mail=".$ad['mail'].'<br />correo='.$correo;//se crea el usuario nuevo
            }
        }
        exit;
        //implementación Auth Laravel
        if (Auth::attempt(['email' => $ad['mail'], 'password' => $request->input('pass')]))   
            {
           
            return redirect()->intended('/');
        }else
        {
            $request->session()->flash('css', 'danger');
            $request->session()->flash('mensaje', 'Los datos ingresados no son correctos');
            return redirect()->route('acceso_login');
        }
       
    }
    public function login_post(Request $request)
    {
        
        $this->validate
        (
            $request,
            [
                'correo'=>'required|email',
                'pass'=>'required'
            ],
            [
                'correo.required'=>'El campo E-Mail está vacío',
                'correo.email'=>'El E-Mail ingresado no tiene un formato válido',
                'pass.required'=>'El campo Contraseña está vacío',
            ]
        );
       if (Auth::attempt(['email' => $request->input('correo'), 'password' => $request->input('pass')]))   
            {
           
            return redirect()->intended('/');
        }else
        {
            $request->session()->flash('css', 'danger');
            $request->session()->flash('mensaje', 'Los datos ingresados no son correctos');
            return redirect()->route('acceso_login');
        }
       
    }
    
    public function salir(Request $request)
    {
        Auth::logout();
        $request->session()->forget('perfil');
        $request->session()->forget('perfil_id');
        $request->session()->flash('css', 'success');
        $request->session()->flash('mensaje', 'Haz cerrado sesión exitosamente');
        return redirect()->route('index_index');
    }
    
}