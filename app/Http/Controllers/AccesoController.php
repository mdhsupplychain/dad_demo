<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use App\Usuarios;
use App\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
class AccesoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('acceso');
        $this->middleware('auth.basic');
    }
    public function login()
    {
        return view('acceso.login');
    }
    public function login1()
    {
        return view('acceso.login1');
    }
    public function login2()
    {
        return view('acceso.login2');
    }
    public function login_post(Request $request)
    {
        
        $this->validate
        (
            $request,
            [
                'uid'=>'required',
                'password'=>'required'
            ],
            [
                'uid.required'=>'El campo Usuario CENCOSUD está vacío',
                'password.required'=>'El campo Contraseña CENCOSUD está vacío',
            ]
        );
        //implementación AD
        $ad=Helpers::active_directory($request->input('uid'), $request->input('password'));
        if($ad['estado']=='0')
        {
            $request->session()->flash('css', 'danger');
            $request->session()->flash('mensaje', $ad['mensaje']);
            return redirect()->route('acceso_login');exit;
        }
        //validación si existe o no el usuario
        $datos = User::where('email',$ad['samaccountname'])->get();
        $i=0;
        $uid="";
        $perfil_id="";
        $perfil="";
        $nombre="";
        foreach($datos as $key=>$dato)
        {
            $uid=$dato->id;
            $perfil_id=$dato->perfil_id;
            $perfil=$dato->perfil->perfiles;
            $nombre=$dato->name;
            $i++;
        }
        if($i==0)
        {
            $user=$this->createUser($ad);
            $perfil_id=$user->perfil_id;
            $nombre=$user->name;
            /****correo****/
            $mensaje=utf8_decode('mensaje que posteriosmente hay que redactar para esta acción');
            $msg='';
            require_once('php_mailer/src/SMTP.php');
            require_once('php_mailer/src/PHPMailer.php');

            $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = 'smtphub.cencosud.cl';
                    $mail->Port = 25;
                    $mail->CharSet = 'ISO-8859-1';
                    $mail->setFrom('SupplyChain_Mdh@cencosud.cl', utf8_decode('Supply Chain'));
                    $mail->addAddress($ad['mail']);
                    $mail->Subject = utf8_decode('Alta en DAD')  ;
                    $mail->Body = "Estimado:\n\n" . $mensaje;
                    if (!$mail->send()) {
                        $msg .= "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        $msg .= "Message sent!";
                    }
            /****fin correo***/
            $request->session()->flash('css', 'primary');
            $request->session()->flash('mensaje', 'Estimad@ '.$nombre.', se ha creado tu cuenta exitosamente. Te enviamos un correo electrónico al E-Mail '.$ad['mail'].' con las instrucciones para que actives tu cuenta . ');
            return redirect()->route('acceso_login');
        }else
        {
            $this->editUser($ad, $uid);
            $envio=0;
        }
        if($perfil_id=='4')
        {
            
            $request->session()->flash('css', 'primary');
            $request->session()->flash('mensaje', 'Estimad@ '.$nombre.', debes ponerte en contacto con la célula de Supply Chain al E-Mail SupplyChain_Mdh@cencosud.cl y solicitar que se habilite tu acceso a DAD. ');
            return redirect()->route('acceso_login');
        }
        //implementación Auth Laravel
        //echo strtoupper($ad['samaccountname']);exit;
        if (Auth::attempt(['email' => strtoupper($ad['samaccountname']), 'password' => $request->input('password')])) 
            {
            return redirect()->intended('/');
        }else
        {
            $request->session()->flash('css', 'danger');
            $request->session()->flash('mensaje', 'Los datos ingresados no son correctos');
            return redirect()->route('acceso_login');
        }
       
    }
    private function createUser($datos=array())
    {
         $user=User::create([
            'name' => $datos['cn'],
            'email' => $datos['samaccountname'],
            'password' => bcrypt($datos['password']),
            'created_at' => date('Y-m-d h:i:s'),
            'perfil_id'=>4
        ]);
         return $user;
    }
    private function editUser($datos=array(), $uid)
    {
        $arreglo = User::find($uid);
        $arreglo->name = $datos['cn'];
        $arreglo->email = $datos['samaccountname'];
        $arreglo->password = bcrypt($datos['password']);
        $arreglo->save();
    }
    public function salir(Request $request)
    {
        $request->session()->forget('perfil');
        $request->session()->forget('perfil_id');
        Auth::logout();
        $request->session()->flash('css', 'success');
        $request->session()->flash('mensaje', 'Haz cerrado sesión exitosamente');
        return redirect()->route('acceso_login');
    }
    
}