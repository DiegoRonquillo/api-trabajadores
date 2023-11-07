<?php

namespace App\Http\Controllers\Trabajadores;

use App\Http\Controllers\Controller;
use App\Models\Trabajadores;
use Illuminate\Http\Request;
use Exception;

class TrabajadoresController extends Controller
{
    #FUNCION PARA OTENER LISTADO DE TRABAJADORES
    public function obtenerTrabajadores()
    {
        //
        return Trabajadores::obtenerTrabajadores();
    }

    #FUNCION PARA CREAR UN NUEVO TRABAJADOR
    public function insertarTrabajador(Request $request)
    {
        $response = null;
        try{
            #CREAMOS UN NUEVO OBJETO VACIO
            $args = new \StdClass();
            #RELLENAMOS Y VALIDAMOS QUE SI VENGAN LOS DATOS CORRECTOS
            $args->nombreTrabajador = $request->nombreTrabajador;
            if(!is_string($args->nombreTrabajador)){
                throw new Exception("Se requiere el parametro nombreTrabajador|string", 422);
            }
            $args->telTrabajador = $request->telTrabajador;
            if(!is_string($args->telTrabajador)){
                throw new Exception("Se requiere el parametro telTrabajador|string", 422);
            }
            $args->pagoxhr = $request->pagoxhr;
            if(!is_int($args->pagoxhr) || $args->pagoxhr < 0){
                throw new Exception("Se requiere el parametro pagoxhr|int", 422);
            }
            $args->pagoxDia = $request->pagoxDia;
            if(!is_int($args->pagoxDia) || $args->pagoxDia < 0){
                throw new Exception("Se requiere el parametro pagoxDia|int", 422);
            }
            $args->pagoxhrExtra = $request->pagoxhrExtra;
            if(!is_int($args->pagoxhrExtra) || $args->pagoxhrExtra < 0){
                throw new Exception("Se requiere el parametro pagoxhrExtra|int", 422);
            }
            $response = Trabajadores::insertarTrabajador($args);
            return $response;
        }catch(Exception $e){
            return [
                "ERROR" => $e->getMessage(),
                "MENSAJE" => "Verficar el error y manejarlo correctamente..."
            ];
        }
    }

    /**
     * Display the specified resource.
     */
    public function eliminarTrabajadores(Request $request)
    {
        $response = null;
        try{
            #CREAMOS UN NUEVO OBJETO VACIO
            //$args = new \StdClass();
            #RELLENAMOS Y VALIDAMOS QUE SI VENGAN LOS DATOS CORRECTOS
            /*$args->arrayTrabajadores = $request->arrayTrabajadores;
            if(!is_string($args->arrayTrabajadores)){
                throw new Exception("Se requiere el parametro arrayTrabajadores|string", 422);
            }*/
            $aj = '3,4,5,6,7';
            $arrayEx = array($aj);
            var_dump($arrayEx);
            $response = Trabajadores::eliminarTrabajadores($arrayEx);
            return $response;
        }catch(Exception $e){
            return [
                "ERROR" => $e->getMessage(),
                "MENSAJE" => "Verficar el error y manejarlo correctamente..."
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
