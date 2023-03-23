<?php
class Database {
    public static $db;
    public static $con;

    function __construct(){
        $this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="login_register_bd.sql";
    }

    function connect(){
        $con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
        return $con;
    }

    public static function getCon(){
        if(self::$con==null && self::$db==null){
            self::$db = new Database();
            self::$con = self::$db->connect();
        }
        return self::$con;
    }
}

// Ejemplo de uso de SweetAlert en PHP
if (isset($_POST['submit'])) {
    // Verificar si se ha enviado el formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos recibidos del formulario

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Si los datos son válidos, guardar el mensaje en la base de datos
        $con = Database::getCon();
        $query = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
        $result = mysqli_query($con, $query);
        
        // Mostrar mensaje de éxito con SweetAlert
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "¡Mensaje enviado!",
            text: "Gracias por tu mensaje, nos pondremos en contacto contigo pronto."
        });
        </script>';

    } else {
        // Si los datos no son válidos, mostrar mensaje de error con SweetAlert
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "¡Error!",
            text: "Por favor, completa todos los campos del formulario."
        });
        </script>';
    }
}
?>