<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camionero;

class CamioneroController extends Controller
{
    public function Listar(Request $request){
        return Camionero::all();
    }

    public function ListarUno(Request $request, $idCamion){
        return Camionero::findOrFail($idCamion);

    }

    public function Eliminar(Request $request, $idCamion){
        $camionero = Camionero::findOrFail($idCamion);
        $camionero -> delete();

        return [ "mensaje" => "Camionero $idCamion eliminada."];
        
    }
    public function Insertar(Request $request){
        $chofer = new Chofer;
        $chofer -> nombre = $request -> post("nombre");
        $chofer -> apellido = $request -> post("apellido");

        $chofer -> save();

        return $chofer;
    }

    public function Modificar(Request $request, $idChofer){
        $chofer = Persona::findOrFail($idChofer);
        $chofer -> nombre = $request -> post("nombre");
        $chofer -> apellido = $request -> post("apellido");
        @If($chofer) > 18
        return("Chofer puede manejar");
        @else(chofer < 18)
            return("Chofer es menor para manejar");
        $chofer -> save();
        return $chofer;
    }