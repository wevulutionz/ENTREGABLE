<?php
require_once __DIR__ . '/../../config/DB.php';
require_once __DIR__ . '/./usuario.php';
class usuariomodel
{
    public static function existe($username)
    {
        $db = DB::conection();
        $sql = 'select idusuario from usuario where username = :username';
        $ps = $db->prepare($sql);
        $ps->bindParam(':username', $username);
        $ps->execute();
        return $ps->rowCount() > 0;
    }

    public static function obtenerPorUsername($username)
    {
        $db = DB::conection();
        $sql = "select * from usuario where username = :username";
        $ps = $db->prepare($sql);
        $ps->bindParam(':username', $username);
        $ps->execute();
        if ($data = $ps->fetch()) {
            return new usuario($data['idusuario'], $data['username'], $data['password']);
        } else {
            return null;
        }
    }

    public static function insertar($username, $password)
    {
        $db = new DB();
        $cn = $db->conection();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $ps = $cn->prepare("insert into usuario (username, password) values (:username, :password)");
        $ps->bindParam(':username', $username);
        $ps->bindParam(':password', $hash);
        return $ps->execute();
    }
}
