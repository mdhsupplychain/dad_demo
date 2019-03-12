<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function __construct()
	{
	    //$this->middleware('acceso');
	    $this->middleware('auth.basic');
	}
    public function index()
    {
        return view('index.index');
    }
    public function index1()
    {
        return view('index.index1');
    }
    public function index2()
    {
        return view('index.index2');
    }
    public function index3()
    {
        return view('index.index3');
    }
    public function tablas()
    {
        return view('index.tablas');
    }
    public function formulario()
    {
        return view('index.formulario');
    }
    public function modal_dte($id)
    {
        return view('index.modal_dte', compact('id'));
    }
}