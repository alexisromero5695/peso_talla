<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }

    public function ConsultarDni(Request $request){
        $paciente = Paciente::where('dni_paciente',$request->dni)->first();
        if(empty($paciente)){
            return response()->json(
                [
                    'success'=>false,
                    'message'=>'No se encontró paciente',
                ],400);
        }else{
            return response()->json($paciente);
        }
    }
}
