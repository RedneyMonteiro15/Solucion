<?php include '../includes/header.php' ?>
<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dashboard - Solution</title>


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


    <div class="row">
      <div class="col-lg-7 position-relative z-index-2">
        <div class="card card-plain mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <h2 class="font-weight-bolder mb-0">Estatistica pedidos serviços</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-sm-5">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Websites</p>
                  <h4 class="mb-0">281</h4>
                </div>
              </div>

              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
              </div>
            </div>

            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">leaderboard</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Base de dados</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>

              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
              </div>
            </div>

            <div class="card  mb-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">leaderboard</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Aplicações</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>

              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
              </div>
            </div>

          </div>
          <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
            <div class="card  mb-2">
              <div class="card-header p-3 pt-2 bg-transparent">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">store</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                  <h4 class="mb-0 ">34k</h4>
                </div>
              </div>

              <hr class="horizontal my-0 dark">
              <div class="card-footer p-3">
                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
              </div>
            </div>

            <div class="card ">
              <div class="card-header p-3 pt-2 bg-transparent">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person_add</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize ">Followers</p>
                  <h4 class="mb-0 ">+91</h4>
                </div>
              </div>

              <hr class="horizontal my-0 dark">
              <div class="card-footer p-3">
                <p class="mb-0 ">Just updated</p>
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

