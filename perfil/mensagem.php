<?php include '../includes/header.php' ?>
<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Enviar mensagem - Solution</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- CSS Files -->
  <link id="pagestyle" href="../css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

  <link href="../css/stylePerfil.css" rel="stylesheet" />

  



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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="chat_mensagem.php">Mensagem</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Enviar Mensagem</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Enviar Mensagem</h6>
          
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

        
        <?php include '../includes/dropdown.php' ?>
        
        
      </nav>
      <!-- End Navbar -->
    

  <div class="container bootstrap snippets bootdey">
    <div class="row">
      <div class="col-md-4 bg-white ">
        <div class=" row border-bottom padding-sm" style="height: 40px;">
          <p>Membros</p>
        </div>
        <ul class="friend-list">
          <li class="active bounceInDown">
            <a href="#" class="clearfix">
              <img src="https://bootdey.com/img/Content/user_1.jpg" alt class="img-circle">
              <div class="friend-name">
              <strong>John Doe</strong>
              </div>
              <div class="last-message text-muted">Hello, Are you there?</div>
              <small class="time text-muted">Just now</small>
              <small class="chat-alert label label-danger">1</small>
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <img src="https://bootdey.com/img/Content/user_2.jpg" alt class="img-circle">
              <div class="friend-name">
              <strong>Jane Doe</strong>
              </div>
              <div class="last-message text-muted">Lorem ipsum dolor sit amet.</div>
              <small class="time text-muted">5 mins ago</small>
              <small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-8 bg-white ">
        <div class="chat-message">
          <ul class="chat">
            <li class="left clearfix">
              <span class="chat-img pull-left">
                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="User Avatar">
              </span>
              <div class="chat-body clearfix">
                <div class="header">
                  <strong class="primary-font">John Doe</strong>
                  <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </li>
            <li class="right clearfix">
              <span class="chat-img pull-right">
                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="User Avatar">
              </span>
              <div class="chat-body clearfix">
                <div class="header">
                  <strong class="primary-font">Sarah</strong>
                  <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.
                </p>
              </div>
            </li>
          <ul>
        </div>
        <div class="chat-box bg-white">
          <div class="input-group">
            <input class="form-control border no-shadow no-rounded" placeholder="Type your message here">
            <span class="input-group-btn">
            <button class="btn btn-success no-rounded" type="button">Send</button>
            </span>
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

