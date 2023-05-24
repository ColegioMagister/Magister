<?php require "php/sesion_star.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <?php include "inc/head.php"; ?>  

</head>

<body class="bg-gray-200">

  <main class="main-content  mt-0">


    <div class="global-container page-header align-items-start min-vh-100">

      
      <div class="box1 min-vh-100">
        <img src="assets/img/login-bg/logo-magister.png" class="z-index-2" alt="">
      </div>

        <span class="mask bg-gradient-dark opacity-4 z-index-0"></span>

        <div class="box2 container my-auto z-index-2">
            <div class="logo-magister my-5">
              <h4 class="text-center text-white font-weight-light">SISTEMA DE ADMINISTRACIÓN ESCOLAR</h4>
              <img src="assets/img/login-bg/logo-magister.png" alt="">
              
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            
                            <div class="box-wlc border-radius-lg py-3 pe-1">
                                <img src="assets/img/login-bg/bg-right1.jpg" alt="">
                                <h3 class="text-white font-weight-bolder text-center mt-3 mb-4">¡BIENVENIDO!</h3>
                                <h4 class="text-white font-weight-light text-center mt-2 mb-3">Ingrese a su cuenta</h4>
                    
                            </div>
                        </div>

                        <?php
                             include "vistas/login.php";
                        ?>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>
  </main>

  <!--   Core JS Files   -->

  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>