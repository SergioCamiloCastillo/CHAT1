<?php

    class conectar{
        function conexion($nombre,$mensaje){

            try{
                $base=new PDO('mysql:host=localhost; dbname=chat','root','');
                $base->exec('SET CHARACTER SET UTF8');
                $sql ='insert into ejerci (Nombre, Mensaje) values(:nombre, :mensaje)';
                $resultado=$base->prepare($sql);
                $resultado->execute(array(':nombre'=>$nombre, ':mensaje'=>$mensaje));


            }catch(Exception $e){
                echo 'Error: '.$e->Getmessage();
            }

        }

    }
