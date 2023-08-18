<?php include '../includes/header.php' ?>
<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Pedir orçamento - Solution</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- CSS Files -->
  <link id="pagestyle" href="../css/material-dashboard.css?v=3.1.0" rel="stylesheet" />



</head>


<body class="g-sidenav-show  bg-gray-100">

    

    
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-9 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">

    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="pedir_orcamento.php">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Pedir orçamento</span>
          </a>
        </li>

          
        <li class="nav-item">
          <a class="nav-link text-white " href="projetos_decorrer.php">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Projetos a decorrer</span>
          </a>
        </li>

          
        <li class="nav-item">
          <a class="nav-link text-white " href="projetos_concluidos.php">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Projetos concluidos </span>
          </a>
        </li>

          
        <li class="nav-item">
          <a class="nav-link text-white " href="chat_mensagem.php">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Mensagens</span>
          </a>
        </li>

          


          
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Minha conta</h6>
        </li>
          
        <li class="nav-item">
          <a class="nav-link text-white " href="perfil.php">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>

          
        <li class="nav-item">
          <a class="nav-link text-white " href="#LOGOUT">
            
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-x-diamond"></i>
              </div>
            
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>

      </ul>
    </div>
    
   
  </aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">index</h6>
          
        </nav>

        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          

        </ul>
        
      </div>
    </nav>

    <!-- End Navbar -->


    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-info">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-secondary">Website</p>
                  <p class="mb-0 text-secondary">Aplicações</p>
                  <p class="mb-0 text-secondary">Base de dados</p>
                </div>
                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="bi bi-plus-circle-fill"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card radius-10 border-start border-0 border-3 border-info">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div>
                  <p class="mb-0 text-secondary">Convites</p>
                  <p class="mb-0 text-secondary">Curriculos</p>
                </div>
                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="bi bi-plus-circle-fill"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>








<!--   Core JS Files   -->
<script src="../js/core/popper.min.js" ></script>
<script src="../js/core/bootstrap.min.js" ></script>
<script src="../js/plugins/perfect-scrollbar.min.js" ></script>
<script src="../js/plugins/smooth-scrollbar.min.js" ></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>



<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="../js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>

