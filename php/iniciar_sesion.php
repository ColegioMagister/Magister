<?php
    #almacenando datos
    $usuario=limpiar_cadena($_POST['username']);
    $clave=limpiar_cadena($_POST['password']);

    //  #verificando intregridad de los datos
    //  if(verificar_datos("[a-zA-Z0-9]{4,20}",$usuario)){
    //     echo '
    //         <div class="notification is-danger is-light">
    //             <strong>¡Ocurrio un error inesperado!</strong><br>
    //             El usuario no coincide con el formato solicitado
    //         </div>';
    //     exit();
    // }

    // if(verificar_datos("[a-zA-Z0-9$@.-]{7,100}",$clave)){
    //     echo '
    //         <div class="notification is-danger is-light">
    //             <strong>¡Ocurrio un error inesperado!</strong><br>
    //             La contraseña no coincide con el formato solicitado
    //         </div>';
    //     exit();
    // }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
    

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);


        if ($count>=1){
            if($row['usuario']==$usuario && $row['clave']==$clave){

                $_SESSION['nombre']=$row['nombre'];
                $_SESSION['usuario']=$row['usuario'];

                if(headers_sent()){
                    echo "<scrip> window.location.href='home.php?vista=dashboard';
                    </scrip>";
                }else{
                    header("Location:home.php?vista=dashboard");
                    }

            }else{
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        El usuario o clave incorrecto
                </div>';
            }
        }else{
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                     El usuario no existe
                </div>';
        }
    }
    $sql=null;


?>