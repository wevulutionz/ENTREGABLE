Se hace uso de bootstrap ademas de una libreria llamada FPDF 
El proyecto contiene lo que requiere el entregable teniendo la seguridad de un login y registrarse como:
-registrar solo usuario con diferente nombre registrado en la DB
-al volver a una pagina anterior despues de haber cerrado sesion, redigire al usuario al login ya que no se encontro una sesion abierta
-el usuario debe rellenar todo si o si 
-la contraseña al registrase se hashea

Tiene la capacidad de mostrar y guardar ademas de eliminar tanto de cliente como proyecto 

Contiene un index que sirve para redirigir todos los datos al controller 

Tiene la capacidad de generar pdf con la libreria FPDF solo en la tabla de proyectos ya que ahi tiene todos los datos como de clientes y de el mismo, en clientes no genera pdf ya que no es necesario 

CARGAR BD

El archivo llamado gestiondb se puede cargar desde Xampp phpmyadmin,dirigiendose en la parte de arriba a IMPORTAR y dando en "Seleccionar archivo" y cargar el archivo sql y luego ir hacia abajo y dar en "importar" para que cargue el archivo y se pueda usar la BD
