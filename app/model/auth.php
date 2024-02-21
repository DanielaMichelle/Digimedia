<?php
    class ModelAuth {
        public static function login($Data = []) {


            [ $err, $res ] =  Db::query('SELECT * FROM usuarios WHERE usuario = ?', [ $Data['email'] ]); 

            if( $err ) {
                return null;
            }

            return $res->get_result()->fetch_assoc();
 
        }
    }

    //el correo no existe
    //la contraseña no existe


    //las credenciale son incorrectas