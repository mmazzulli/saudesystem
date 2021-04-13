<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Sistema - Gestão de Pacientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="js/alerts.js"></script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="index.php" class="logo">Saúde+</a></h1>
	        <ul class="list-unstyled components mb-5">
					<li class="active">
	            <a href="#">A Clínica</a>
	        </li> 
					<li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pacientes</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="index.php?pagina=elenca_paciente.php">Listar pacientes</a>
                </li>
                <li>
                    <a href="index.php?pagina=include_paciente.php">Incluir paciente</a>
                </li>

	            </ul>
								</li>
	          <li>
              <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Especialidades</a>
              <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="index.php?pagina=elenca_especial.php">Listar especialidades</a>
                </li>
                <li>
                    <a href="index.php?pagina=include_especial.php">Incluir especialidade</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Médicos</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="index.php?pagina=elenca_medico.php">Listar médicos</a>
                </li>
                <li>
                    <a href="index.php?pagina=include_medico.php">Incluir médico</a>
                </li>
              </ul>
						</li>
						
						<li>
              <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Consultas</a>
              <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li>
                    <a href="index.php?pagina=elenca_consulta.php">Listar consultas</a>
                </li>
                <li>
                    <a href="index.php?pagina=appunta_medico.php">Agendar consulta</a>
                </li>
                 <li>
                    <a href="index.php?pagina=elenca_consulta_personal.php">Buscas personalizadas</a>
                </li>
              </ul>
	          </li>

	          <!-- <li>
              <a href="#">Contact</a>
	          </li> -->
	        </ul>

	        <div class="mb-5">
						<!-- <h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form> -->
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">M.M</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
        <div class="container">
            <div class="jumbotron">
                <h1>Com.Saúde</h1>
                <p>Sistema de Administração de Consultas</p>
                <p><code></code></p>
                <p><a class="btn btn-primary btn-lg " role="button">Saiba Mais</a></p>
            </div>

            <?php
if (isset($_GET['pagina']) != '') {
	include_once $_GET['pagina'];
}
?>

        </div>
		</div>
    <div class="footer ">
            <div class="container">
                <hr>
                <p class="text-muted text-center"><a href="#" target="_blank">&copy; 2021 | M.M</a></p>
            </div>
        </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>