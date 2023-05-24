<?php require "php/config.php";?>

<div class="row">
<div class="col-12">
<div class="card my-4">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h6 class="text-white text-capitalize ps-3">Profesores</h6>
</div>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModRegAlumno">
    <i class="fa-solid fa-plus"></i> &nbsp; Ingresar
</button>
</div>
<div class="card-body px-0 pb-2">
<div class="table-responsive p-0">
<table class="table align-items-center mb-0">
<thead>
<tr>
<th class="text-center opacity-7">ID</th>
<th class="text-uppercase text-secondary ps-2">Nombre</th>
<th class="text-uppercase text-secondary ps-2 ">Rol</th>
<th class="text-uppercase text-secondary ps-2 ">Correo</th>
<th class="text-uppercase text-secondary ps-2">Usuario</th>
<th colspan=2 class="text-secondary opacity-7"></th>
</tr>
</thead>
    <tbody>
        <?php 
        $query="SELECT * FROM usuarios";
            if ($result =$db->query($query)){
                while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td class="align-middle text-center text-sm"><?php echo $row['id_usu']?></td>
            <td >
                <div class="d-flex px-2 py-1">
                    <div>
                        <img src="<?php echo $row['url_img']?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['nombre']?> <?php echo $row['apellido']?></h6>
                    </div>
                </div>
            </td>
            <td class="align-middle text-uppercase text-sm "><?php echo $row['rol']?></td>
            <td ><?php echo $row['correo']?></td>
            <td><?php echo $row['usuario']?></td>
            <td class="align-middle text-uppercase text-sm">
                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Editar
                </a>
            </td>
            <td class="align-middle text-uppercase text-sm">
                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Eliminar
                </a>
            </td>
        <tr>
        <?php 
                }
            }

        ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="ModRegAlumno" tabindex="-1" aria-labelledby="ModRegAlumno" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary">
                    <h5 class="modal-title text-white" id="ModRegAlumno">Registrar Profesor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                                                                                 <!-- #para que cargue  -->
                    <form role="form" class="text-start" method="POST" action="" enctype="multipart/form-data">

                        <div class="modal-body">
                            <p> Ingresar Datos del Profesor: </p>
                            <div class="input-group input-group-outline mt-2 mb-4">

                                <div class="col-6">
                                    <div class="input-group input-group-outline me-2">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" class="form-control" name="nombre" required>
                                    </div>
                                </div>
                            
                                <div class="col-6">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" name="apellido" required>
                                    </div>
                                </div>

                            </div>


                            <div class="input-group input-group-outline mt-2 mb-4">

                                <div class="col-4">
                                    <div class="input-group input-group-outline me-2">
                                        <label class="form-label">Rol</label>
                                        <input type="text" class="form-control" name="rol" required>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-group input-group-outline me-2">
                                        <label class="form-label">Usuario</label>
                                        <input type="text" class="form-control" name="usuario" required>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name="clave" required>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" required>
                            </div>

                            <span class="text-secondary text-xs ms-1" for="url_img">Foto del Profesor</span>
                            <div class="input-group input-group-outline mb-3">
                                <input type="file" class="form-control" id="url_img" name="url_img">
                            </div>
                                <img id="previewImage" class="avatar avatar-sm me-3 border-radius-lg" alt="Vista previa de la imagen">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Cerrar</button>
                            <input class="btn btn-primary" type="submit" name="submit" value="Registrar">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  document.getElementById('url_img').addEventListener('change', function (e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    
    reader.onload = function (event) {
      document.getElementById('previewImage').setAttribute('src', event.target.result);
    }
    
    reader.readAsDataURL(file);
  });
</script>

<?php
    if (isset($_POST['submit'])) {
        $myrol = limpiar_cadena($_POST['rol']);
        $mycorreo = limpiar_cadena($_POST['correo']);
        $myname =limpiar_cadena($_POST['nombre']);
        $myapell = limpiar_cadena($_POST['apellido']);
        $myusername = limpiar_cadena($_POST['usuario']);
        $mypassword = limpiar_cadena($_POST['clave']);

        //funcion para guardan img  y darle un ruta
        if (isset($_FILES['url_img']) && $_FILES['url_img']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['url_img']['tmp_name'];
            $fileName = $_FILES['url_img']['name'];
            $fileSize = $_FILES['url_img']['size'];
            $fileType = $_FILES['url_img']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

           //ruta donde guardar imagenes subida
            $uploadDir = "./assets/img/";
            //genera un nombre con ruta unico
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            //ruta completa
            $uploadPath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                
                $myimg = $uploadPath;
                
                    $sql = $db->prepare("INSERT INTO usuarios (rol, url_img, correo, nombre, apellido, usuario, clave) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $sql->bind_param('sssssss', $myrol, $myimg, $mycorreo, $myname, $myapell, $myusername, $mypassword);
                    $sql->execute();

                    if ($sql->error) {
                        echo "Error en la consulta SQL: " . $sql->error;
                    } else {
                        if(headers_sent()){
                            echo '<script>';
                            echo 'alert("Registro de datos correcto");';
                            echo 'window.location.href ="home.php?vista=profesores";';
                            echo '</script>';
                        }else {
                            echo '<script type="text/javascript">';
                            echo 'alert("Error en el registro de datos");';
                            echo '</script>';
                        }
                    }
                $sql->close();
                }else{
                    echo "Error al mover imagen al directorio";
                }
            }else{
                echo "No se ha seleccionado ninguna imagen";
            }
}
?>