<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index(){
        return view('departamentos/inicio');
    }

    public function dep_auditoria(){
        return view('departamentos/dep_auditoria');
    }
    public function dep_compras(){
        return view('departamentos/dep_compras');
    }
    public function dep_conta(){
        return view('departamentos/dep_conta');
    }
    public function dep_marketing(){
        return view('departamentos/dep_marketing');
    }
    public function dep_rrhh(){
        return view('departamentos/dep_rrhh');
    }
    public function dep_sis(){
        return view('departamentos/dep_sistemas');
    }
    public function auditoria_login(){
        return view('departamentos_login/auditoria_acceso');
    }
    public function marketing_login(){
        return view('departamentos_login/auditoria_acceso');
    }
}
