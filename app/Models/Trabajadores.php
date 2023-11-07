<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDO;


class Trabajadores extends Model
{
    use HasFactory; 

    public static function obtenerTrabajadores()
    {
        $db = DB::connection()->getPdo();
        $query = "select*from obtener_trabajadores_todos()";
        $statement = $db->prepare($query);
        $statement->execute();
        //var_dump(count($statement->fetchAll(PDO::FETCH_OBJ)));
        return $statement->fetchAll(PDO::FETCH_OBJ);
        //$je = DB::select("select*from obtener_trabajadores_todos()");
        //$con = new Connector();
        //return $con;
        //return $je;
    }

    public static function insertarTrabajador($args)
    {
        $db = DB::connection()->getPdo();
        $query = "CALL insert_Trabajador (?,?,?,?,?)";
        $statement = $db->prepare($query);
        $statement->execute([$args->nombreTrabajador, $args->telTrabajador, $args->pagoxhr, $args->pagoxDia, $args->pagoxhrExtra]);
        return "Insertado Correctamente";
        /*$insert = DB::select("CALL insert_Trabajador(?,?,?,?,?)", [$args->nombreTrabajador, $args->telTrabajador, $args->pagoxhr, $args->pagoxDia, $args->pagoxhrExtra]);
        $mensaje = 'Trabajador insertado exitosamente';
        return $mensaje;*/
    }

    public static function eliminarTrabajadores($args)
    {
        /*$db = DB::connection()->getPdo();
        $query = "SELECT*FROM eliminar_trabajador(:idTrabajador);";
        $statement = $db->prepare($query);
        $numero = 5;
        $statement->execute(["idTrabajador" => $args->idTrabajador]);*/
        return $args;
    }
}
