<?php
require_once __DIR__ . '/../../config/DB.php';
require_once __DIR__ . '/../Proyectos/proyectos.php';
class proyectosmodel
{

    public static function obtenerTodos()
    {
        $db = DB::conection();
        $ps = $db->query("select * from proyectos");
        return $ps->fetchAll();
    }

    public static function insertar($nom, $des, $idcli)
    {
        $db = DB::conection();
        $ps = $db->prepare("insert into proyectos (nombre, descripcion, idcliente) values (:nom, :des, :idcli)");
        $ps->bindParam(':nom', $nom);
        $ps->bindParam(':des', $des);
        $ps->bindParam(':idcli', $idcli);
        return $ps->execute();
    }

    public static function eliminar($id)
    {
        $db = DB::conection();
        $ps = $db->prepare("delete from proyectos where idproyecto = :id");
        $ps->bindParam(':id', $id);
        return $ps->execute();
    }

    public static function obtenerPorId($id)
    {
        $db = DB::conection();
        $ps = $db->prepare("select * from proyectos where idproyecto = :id");
        $ps->bindParam(':id', $id);
        $ps->execute();
        return $ps->fetch();
    }
}
