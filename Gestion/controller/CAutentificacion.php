<?php
require_once __DIR__ . '/../model/Usuario/usuariomodel.php';
session_start();

class Autentificacion {

    public function login() {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['iniciar'])) {
            $usuario = $_POST['usuario'];
            $clave = $_POST['password'];
            $usuarioDB = usuariomodel::obtenerPorUsername($usuario);
            if ($usuarioDB && password_verify($clave, $usuarioDB->getPassword())) {
                $_SESSION['usuario'] = $usuarioDB->getUsername();
                header("Location: ../view/inicio.php");
                exit;
            } else {
                $error = "Ingreso no encontrado";
            }
        }
        include __DIR__ . '/../view/login.php';
    }

    public function registrar() {
        $mensaje = '';
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];

            if (empty($usuario) || empty($password)) {
                $error = "Todos los campos son obligatorios.";
            } elseif (usuariomodel::existe($usuario)) {
                $error = "El nombre de usuario ya esta registrado";
            } else {
                if (usuariomodel::insertar($usuario, $password)) {
                    $mensaje = "Usuario registrado correctamente";
                } else {
                    $error = "Error al registrar usuario";
                }
            }
        }

        include './view/register.php';
    }

    public function logout() {
        session_destroy();
        header("Location: ../index.php?accion=iniciar");
    }
}
