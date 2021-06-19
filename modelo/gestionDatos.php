<?php    // CRUD A LA BASE DE DATOS

require 'conexion.php';



class servicioDatos extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerUsuarios()
    {
        $consulta = $this->conexion->query('SELECT * FROM users');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function getUsers()
    {
        $consulta = $this->conexion->query('SELECT * from grade_points join users on grade_points.id_user = users.user_id');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }


    public function createUser($user)
    {
        $sql = "INSERT INTO users (name, email, password, rol) 
        VALUES('" . $user->name . "','" . $user->email . "','" . $user->password . "','" . $user->rol . "')";
        $resultado = $this->conexion->query($sql);

        $userId = $this->conexion->insert_id;

        $gradePointAverage = ($user->gradePoint1 + $user->gradePoint2 + $user->gradePoint3) / 3;
        $sql = "INSERT INTO grade_points (grade_point_1, grade_point_2, grade_point_3, grade_point_average, id_user) 
        VALUES('" . $user->gradePoint1 . "','" . $user->gradePoint2 . "','" . $user->gradePoint3 . "','" . $gradePointAverage . "','" . $userId . "')";
        $resultado = $this->conexion->query($sql);

        $this->conexion->close();
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($user)
    {
        $sql = "UPDATE users SET 
        name = '" . $user->name . "',
        email = '" . $user->email . "',
        password = '" . $user->password ."' 
        where user_id = '" . $user->userId . "'";
        $resultado = $this->conexion->query($sql);
        $this->updateUserGradePoints($user);        
        if ($resultado) {            
            return true;
        } else {
            return false;
        }        
        
    }

    public function updateUserGradePoints($user)
    {
        $gradePointAverage = ($user->gradePoint1 + $user->gradePoint2 + $user->gradePoint3) / 3;
        $sql = "UPDATE grade_points SET 
        grade_point_1 = '" . $user->gradePoint1 . "', 
        grade_point_2 = '" . $user->gradePoint2 . "', 
        grade_point_3 = '" . $user->gradePoint3 . "', 
        grade_point_average = '" . $gradePointAverage . "'
        where id = '" . $user->id . "'";

        $resultado = $this->conexion->query($sql);
        if ($this->conexion->ping()) {
            $this->conexion->close();
        }
        if ($resultado) {
            return true;
        } else {
            return false;
        }        
    }

    public function validarCodigo($codigo)
    {
        $consulta = $this->conexion->query("SELECT * FROM users where id='" . $codigo . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado)
            return true;
        else
            return false;
    }

    public function validarUsuario($email, $password)
    {

        $usuarioLogeado = null;

        $usuarios = $this->obtenerUsuarios();
        // echo var_dump($usuarios);

        foreach ($usuarios as $usuario) {
            if ($email == $usuario["email"] && $password == $usuario["password"]) {
                $usuarioLogeado = $usuario;
            }
        }

        return $usuarioLogeado;
    }

    public function getUserById($id)
    {
        $consulta = $this->conexion->query("SELECT * from grade_points join users on grade_points.id_user = users.user_id where users.user_id='" . $id . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function deleteUser($userId)
    {
        $resultado = $this->conexion->query("DELETE FROM users where user_id='" . $userId . "'");
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
        return $resultado;
    }
}
