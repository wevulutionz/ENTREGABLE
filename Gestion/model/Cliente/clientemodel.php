<?php
require_once __DIR__ . '/../../config/DB.php';
require_once __DIR__ . '/../Cliente/clientemodel.php';
class clientemodel
{

    public static function obtenerTodos()
    {
        $db = DB::conection();
        $stmt = $db->query("select * from cliente");
        return $stmt->fetchAll();
    }

    public static function insertar($nombre, $email, $telefono)
    {
        $db = DB::conection();
        $ps = $db->prepare("insert into cliente (nombre, email, telefono) values (:nom, :email, :tel)");
        $ps->bindParam(':nom', $nombre);
        $ps->bindParam(':email', $email);
        $ps->bindParam(':tel', $telefono);
        return $ps->execute();
    }

    public static function eliminar($id)
    {
        $db = DB::conection();
        $ps = $db->prepare("delete from cliente where idcliente = :id");
        $ps->bindParam(':id', $id);
        return $ps->execute();
    }

    public static function obtenerPorId($id)
    {
        $db = DB::conection();
        $ps = $db->prepare("select * from cliente where idcliente = :id");
        $ps->bindParam(':id', $id);
        $ps->execute();
        return $ps->fetch();
    }
}
