<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class SoporteController extends Controller
{
    public function __construct()
	{
	    $this->middleware('acceso');
	}
    public function index()
    {
        
       return view('soporte.index');
    }
    public function index_post(Request $request)
    {
    	$this->validate
        (
            $request,
            [
                'mensaje'=>'required',
            ],
            [
                'mensaje.required'=>'El campo Mensaje está vacío',
            ]
        );
        
    }
    
    
}