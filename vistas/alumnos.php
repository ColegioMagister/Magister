<?php require "php/config.php";?>


      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Alumnos</h6>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombres</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Teléfono</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edad</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sexo</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                     <?php 
                        $query="SELECT * FROM alumnos";
                            if ($result =$db->query($query)){
                                while($row=$result->fetch_assoc()){
                    ?>

                    <tr>

                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold ms-3"> <?php echo $row['id_alumno']; ?> </span>
                        </td>

                        <td>
                            <div class="d-flex py-1">
                                <div>
                                    <img src=" <?php echo $row['url_img']; ?> " class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>

                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"> <?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?> </h6>
                                </div>
                            </div>
                        </td>


                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0"> <?php echo $row['telefono']; ?> </p>
                        </td>

                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0"> <?php echo $row['correo']; ?> </p>
                        </td>

                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['edad']; ?> </span>
                        </td>

                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['sexo']; ?> </span>
                        </td>

                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Editar
                            </a>
                        </td>
                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Editar
                            </a>
                        </td>
                      
                    </tr>
                    <?php }
                    } ?>

                  </tbody>

                </table>

              </div>





            </div>

            
          </div>



<!-- Modal REGISTRAR ALUMNO  -->
        <div class="modal fade" id="ModRegAlumno" tabindex="-1" aria-labelledby="ModRegAlumno" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary">
                    <h5 class="modal-title text-white" id="ModRegAlumno">Registrar Alumno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form role="form" class="text-start" method="POST" action="">

                        <div class="modal-body">

                            <p> Ingresar Datos del alumno: </p>


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
                                        <label class="form-label">Edad</label>
                                        <input type="number" class="form-control" name="edad" required>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-group input-group-outline me-2">
                                        <label class="form-label">Sexo</label>
                                        <input type="text" class="form-control" name="sexo" required>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" name="telef" required>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <span class="text-secondary text-xs ms-1" for="img_alum">Foto de Alumno</span>
                            <div class="input-group input-group-outline mb-3">
                                <input type="file" class="form-control" id="img_alum" name="img_alum">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    


