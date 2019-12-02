<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
			<span class="badge bg-success ml-md-3 mr-md-auto">En linea</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Usuarios</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Usuarios en linea</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Marco Hernandez</a>
										<span class="d-block text-muted font-size-sm">Contador general</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Lucina Cepeda</a>
										<span class="d-block text-muted font-size-sm">Administradora de empleados</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Pedro Linares</a>
										<span class="d-block text-muted font-size-sm">Encargado de base de datos</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Daniel Zavala</a>
										<span class="d-block text-muted font-size-sm">Encargado de gastos</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">Todos los usuarios</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Mensajes</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">0</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Mensajes</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
								</li>

								<li class="media">
								</li>

								<li class="media">
								</li>

								<li class="media">
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Aldo</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfil</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> Mi balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Mensajes <span class="badge badge-pill bg-blue ml-auto">0</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Configuraciones de la cuenta</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Desconectar</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Aldo Puga</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Ciudad Victoria, Tamps
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Formulario transpais</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-bus"></i> <span>Transpais</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="1.Añadir alumnos.php" class="nav-link">Registrar alumno</a></li>
							</ul>
						</li>
						<!-- /forms -->

						<!-- Data visualization -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empresas</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-office"></i> <span>Empresas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="1.Tabla de empresas.php" class="nav-link">Tabla de empresas</a></li>
								<li class="nav-item"><a href="1.Añadir empresas.php" class="nav-link">Añadir empresa</a></li>
								<li class="nav-item"><a href="1.Editar empresas.php" class="nav-link">Editar empresas</a></li>
							</ul>
						</li>
						<!-- /data visualization -->

						<!-- Extensions -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Vacaciones</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar"></i> <span>Vacaciones</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="1.Vacaciones.php" class="nav-link">Vacaciones</a></li>
								<li class="nav-item"><a href="1.Añadir vacaciones.php" class="nav-link">Añadir vacaciones</a></li>
								<li class="nav-item"><a href="1.Editar vacaciones.php" class="nav-link">Editar vacaciones</a></li>
							</ul>
						</li>
						<!-- Extensions -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empleados</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu ">
							<a href="#" class="nav-link"><i class="icon-user"></i> <span>Empleados</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="1.Tabla de empleados.php" class="nav-link active">Tabla de empleados</a></li>
								<li class="nav-item"><a href="1.Editar empleados.php" class="nav-link">Editar</a></li>
								<li class="nav-item"><a href="1.Añadir empleados.php" class="nav-link">Añadir</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits --> 
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Departamentos</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>Departamentos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="1.Tabla de departamentos.php" class="nav-link">Departamentos</a></li>
								<li class="nav-item"><a href="1.Añadir departamentos.php" class="nav-link">Añadir</a></li>
								<li class="nav-item"><a href="1.Editar departamentos.php" class="nav-link">Editar</a></li>
						<!-- /Page kits --> 

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><span class="font-weight-semibold">Añadir empleados</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Menu principal</a>
							<a href="table_basic.php" class="breadcrumb-item">Empleados</a>
							<span class="breadcrumb-item active">Añadir</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Soporte
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Configuraciones
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Seguridad de la cuenta</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analitica</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accesibilidad</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> Todas las configuraciones</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
				<div class="form-group row">
					<div class="col-lg-10">
									<div class="form-group row">
									<label class="col-form-label col-lg-3">Nombre de departamento <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="basic" class="form-control" required placeholder="Administración">
									</div>
								</div><div class="form-group row">
									<label class="col-form-label col-lg-3">Numero de empleados <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="basic" class="form-control" required placeholder="01">
									</div>
								</div><div class="form-group row">
									<label class="col-form-label col-lg-3">Código del departamento <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="basic" class="form-control" required placeholder="213-456">
									</div>
								</div><div class="form-group row">
									<label class="col-form-label col-lg-3">Encargado del departamento <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="basic" class="form-control" required placeholder="Text input validation">
									</div>			
									<div>
			                          <button type="submit" class="btn btn primary ml-3">Añadir empresa<i class="icon-paperplane ml-2"></i></button>
		                            </div>
									</div>			
								</div>				
							</div>					
						</div>						
					</div>
                </div>
            	<!-- Content area -->
            </div>	
            <!-- Content area -->								
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
</body>
</html>
