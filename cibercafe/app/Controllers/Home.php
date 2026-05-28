<?php

namespace App\Controllers;

//use App\Models\AlumnoModel;
//use App\Models\AlumnoRolModel;
//use App\Models\RolModel;

class Home extends BaseController
{
    public function index(): string {
       return view('login', ['mensaje'=>'']);
    }

   /* public function ingreso(){
        $alumnoModel = new AlumnoModel();
        $alumnorolModel = new AlumnoRolModel();
        $rolModel = new RolModel();
        $admin = 0;

        //inicializamos la sesion para acceder a los datos
        $session = session();

        //encriptamos el pass enviado para validarlo
        $ciphertext = password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT);
        // esta solo es para visualizar el encriptamiento
        echo $ciphertext;
        //primero buscamos al usuario sino devolvemos un mensaje
        $where="carnet = '".$this->request->getPost('usuario')."'";
        $usuario=$alumnoModel->where($where)->first();
       
       
        if($usuario){
            //validamos password sino devolvemos mensaje
            $validar=password_verify($this->request->getPost('pass'),$usuario->pass);
            $rol = $rolModel->where("nombre = 'ADMINISTRADOR' ")->first();
            //buscamos si es adminitrador
           // $where = "id_alumno = " . $usuario->id ." and id_rol = " .  $rol->id;
            $ar = $alumnorolModel
            ->where("id_alumno", $usuario->id)
            ->where("id_rol", $rol->id)
            ->first();

            if($ar){
                $admin=1;
            }
            if($validar){
                $newdata = [
                'usuario' => $usuario->nombre,
                'apellido' => $usuario->apellido,
                'id' => $usuario->id,
                'carnet' => $usuario->carnet,
                'admin' => $admin
                ];
                $session->set($newdata);
                return redirect()->to('alumno/index');
            } else{
                $mensaje="Password Equivocado";
                return view('login', ['mensaje'=>$mensaje]);
            }
        }else{
            $mensaje="No existe el usuario";
            return view('login', ['mensaje'=>$mensaje]);
        }
    }
*/
    public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to('home/index');
    }


}