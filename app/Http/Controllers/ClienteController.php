<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
class ClienteController extends Controller
{
    //
    public function GetCliente(){
        $Cliente = CLiente::All();
        return $Cliente;
    }

    public function GetClienteByid($Id){
        $cliente =  Cliente::find($Id);

        if(is_null($cliente)){
            return response()->json(['mensaje Error'=>'elemento no encontrdo']);
        }else{
            return response()->json($cliente::find($Id),200);
        }
    }
    public function PostCliente(Request $request){
        $cliente = Cliente::create($request->all());
        return response($cliente,200);

    }
    public function UpdateCliente(Request $request, $Id){
        $cliente = Cliente::find($Id);
        if(is_null($cliente)){
            return response()->json(['mensaje Error'=>'elemento no encontrdo']);
        }else{
            $cliente-> update($request-> all());
        }
        return response($cliente,200);
    }

    public function DeleteCliente(Request $request, $Id){
        $cliente = Cliente::find($Id);
        if(is_null($cliente)){
            return response()->json(['mensaje Error'=>'elemento no encontrdo']);
        }else{
            $cliente-> delete($request-> all());
        }
        return response()->json(['Mensaje '=>'Elemento eliminado'],200);
    }
}
