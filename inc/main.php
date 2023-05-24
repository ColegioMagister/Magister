
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="assets/img/login-bg/logo-magister.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">I.E.P. "MAGISTER</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?php if ($_GET['vista'] == 'dashboard'){ echo "active bg-gradient-primary"; }?>" href="home.php?vista=dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Panel de Control</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Datos Generales</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-calendar-days"></i>
            </div>
            <span class="nav-link-text ms-1">Año Escolar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-cubes"></i>
            </div>
            <span class="nav-link-text ms-1">Secciones</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="home.php?vista=materias">
            <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-book"></i>
            </div>
            <span class="nav-link-text ms-1">Materias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center ms-1 me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-clock"></i>
            </div>
            <span class="nav-link-text ms-1">Horarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if ($_GET['vista'] == 'profesores'){ echo "active bg-gradient-primary"; }?>" href="home.php?vista=profesores">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-chalkboard-user"></i>
            </div>
            <span class="nav-link-text ms-1">Profesores</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if ($_GET['vista'] == 'alumnos'){ echo "active bg-gradient-primary"; }?>" href="home.php?vista=alumnos">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-people-group"></i>
            </div>
            <span class="nav-link-text ms-1">Alumnos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="home.php?vista=evaluaciones">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-file-pen"></i>
            </div>
            <span class="nav-link-text ms-1">Evaluaciones</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <span class="nav-link-text ms-1">Pagos</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Configuración de usuario</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Panel de Control</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex text-uppercase align-items-center">
            
            <p class="mb-0">¡Bienvenido <?php echo $_SESSION['nombre']?>!</p>
            
          </div>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-flex align-items-center">
              <a href="index.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="d-sm-inline d-none">Cerrar Sesión</span>
              </a>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
       
          </ul>
        </div>
      </div>
    </nav>


    <!-- End Navbar -->





    <div class="container-fluid py-4"> 
        <?php include "vistas/".$_GET['vista'].".php";?>
    </div>

    
 
  </main>


  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuración del sistema</h5>
          
        </div>
        <div class="float-end mt-1">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
      

        <!-- Navbar Fixed -->
        
     
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Claro / Oscuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      
      </div>
    </div>
  </div>