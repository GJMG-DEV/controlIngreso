<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('web/register');
    }
    public function getRegistroUsuarios(){
        return view('Admin/listadoUsuarios');
    }
}
