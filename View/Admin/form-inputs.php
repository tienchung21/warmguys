<!doctype html>
<html lang="en">
<?php session_start();
$idSua = 1;
?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Best Bootstrap Admin Dashboards">
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="assets/images/favicon.svg">
	<link rel="stylesheet" href="../Admin/assets/css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Title -->
	<title>Bootstrap Admin Dashboards</title>


	<!-- *************
			************ Common Css Files *************
		************ -->

	<!-- Animated css -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Bootstrap font icons css -->
	<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

	<!-- Main css -->
	<link rel="stylesheet" href="assets/css/main.min.css">


	<!-- *************
			************ Vendor Css Files *************
		************ -->

	<!-- Scrollbar CSS -->
	<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

</head>

<body>

	<!-- Loading wrapper start -->
	<!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
	<!-- Loading wrapper end -->

	<!-- Page wrapper start -->
	<div class="page-wrapper">

		<!-- Sidebar wrapper start -->
		<nav class="sidebar-wrapper">

			<!-- Sidebar brand starts -->
			<div class="sidebar-brand">
				<a href="index.php" class="logo">
					<img src="assets/images/logo.svg" alt="Admin Dashboards" />
				</a>
			</div>
			<!-- Sidebar brand starts -->

			<!-- Sidebar menu starts -->
			<div class="sidebar-menu">
				<div class="sidebarMenuScroll">
					<ul>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-house"></i>
								<span class="menu-text">Dashboards</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="index.php">Analytics</a>
									</li>
									<li>
										<a href="reports.html">Reports</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-handbag"></i>
								<span class="menu-text">Product</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="orders.html">Order History</a>
									</li>
									<li>
										<a href="products.html">Products</a>
									</li>
									<li>
										<a href="view-cart.html">Shopping Cart</a>
									</li>
									<li>
										<a href="checkout.html">Billing Details</a>
									</li>
									<li>
										<a href="customers.html">Customers</a>
									</li>
									<li>
										<a href="add-product.html">Add Product</a>
									</li>
									<li>
										<a href="reviews.html">Reviews</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-gem"></i>
								<span class="menu-text">Widgets</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="widgets.html">Widgets</a>
									</li>
									<li>
										<a href="graph-widgets.html">Graph Widgets</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-collection"></i>
								<span class="menu-text">UI Elements</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="accordions.html">Accordions</a>
									</li>
									<li>
										<a href="alerts.html">Alerts</a>
									</li>
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="badges.html">Badges</a>
									</li>
									<li>
										<a href="cards.html">Cards</a>
									</li>
									<li>
										<a href="carousel.html">Carousel</a>
									</li>
									<li>
										<a href="dropdowns.html">Dropdowns</a>
									</li>
									<li>
										<a href="icons.html">Icons</a>
									</li>
									<li>
										<a href="modals.html">Modals</a>
									</li>
									<li>
										<a href="offcanvas.html">Off Canvas</a>
									</li>
									<li>
										<a href="progress.html">Progress Bars</a>
									</li>
									<li>
										<a href="spinners.html">Spinners</a>
									</li>
									<li>
										<a href="tabs.html">Tabs</a>
									</li>
									<li>
										<a href="tooltips.html">Tooltips</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-stickies"></i>
								<span class="menu-text">Pages</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="profile.html">Profile</a>
									</li>
									<li>
										<a href="account-settings.html">Account Settings</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="calendar.html">
								<i class="bi bi-calendar4"></i>
								<span class="menu-text">Calendar</span>
							</a>
						</li>
						<li class="sidebar-dropdown active">
							<a href="#">
								<i class="bi bi-columns-gap"></i>
								<span class="menu-text">Forms</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="form-inputs.html" class="current-page">Form Inputs</a>
									</li>
									<li>
										<a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
									</li>
									<li>
										<a href="form-file-input.html">File Input</a>
									</li>
									<li>
										<a href="form-validations.html">Validations</a>
									</li>
									<li>
										<a href="bs-select.html">Bootstrap Select</a>
									</li>
									<li>
										<a href="date-time-pickers.html">Date Time Pickers</a>
									</li>
									<li>
										<a href="input-mask.html">Input Masks</a>
									</li>
									<li>
										<a href="editor.html">Editor</a>
									</li>
									<li>
										<a href="form-layout1.html">Form Layout</a>
									</li>
									<li>
										<a href="form-layout2.html">Form Layout 2</a>
									</li>
									<li>
										<a href="form-layout3.html">Form Layout 3</a>
									</li>
									<li>
										<a href="form-layout4.html">Form Horizontal</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-window-split"></i>
								<span class="menu-text">Tables</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="tables.html">Tables</a>
									</li>
									<li>
										<a href="data-tables.html">Data Tables</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-pie-chart"></i>
								<span class="menu-text">Graphs &amp; Maps</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="apex.html">Apex</a>
									</li>
									<li>
										<a href="morris.html">Morris</a>
									</li>
									<li>
										<a href="maps.html">Maps</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-layout-sidebar"></i>
								<span class="menu-text">Layouts</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="layout.html">Default Layout</a>
									</li>
									<li>
										<a href="layout-grid.html">Grid Layout</a>
									</li>
									<li>
										<a href="layout-welcome.html">Welcome Layout</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="bi bi-x-diamond"></i>
								<span class="menu-text">Authentication</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Signup</a>
									</li>
									<li>
										<a href="error.html">Error</a>
									</li>
									<li>
										<a href="maintenance.html">Maintenance</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="starter-page.html">
								<i class="bi bi-hand-index-thumb"></i>
								<span class="menu-text">Link</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Sidebar menu ends -->

		</nav>
		<!-- Sidebar wrapper end -->

		<!-- *************
				************ Main container start *************
			************* -->
		<div class="main-container">

			<!-- Page header starts -->
			<div class="page-header">

				<div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

				<!-- Breadcrumb start -->
				<ol class="breadcrumb d-md-flex d-none">
					<li class="breadcrumb-item">
						<i class="bi bi-house"></i>
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item">Forms</li>
					<li class="breadcrumb-item breadcrumb-active" aria-current="page">Controls</li>
				</ol>
				<!-- Breadcrumb end -->

				<!-- Header actions ccontainer start -->
				<div class="header-actions-container">

					<!-- Search container start -->
					<div class="search-container">

						<!-- Search input group start -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search anything">
							<button class="btn" type="button">
								<i class="bi bi-search"></i>
							</button>
						</div>
						<!-- Search input group end -->

					</div>
					<!-- Search container end -->

					<!-- Leads start -->
					<a href="orders.html" class="leads d-none d-xl-flex">
						<div class="lead-details">You have <span class="count"> 21 </span> new leads </div>
						<span class="lead-icon"><i
								class="bi bi-bell-fill animate__animated animate__swing animate__infinite infinite"></i><b
								class="dot animate__animated animate__heartBeat animate__infinite"></b></span>
					</a>
					<!-- Leads end -->

					<!-- Header actions start -->
					<ul class="header-actions">
						<li class="dropdown d-none d-md-block">
							<a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true">
								<img src="assets/images/flags/1x1/br.svg" class="flag-img" alt="Admin Panels" />
							</a>
							<div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
								<div class="country-container">
									<a href="index.html">
										<img src="assets/images/flags/1x1/us.svg" alt="Clean Admin Dashboards" />
									</a>
									<a href="index.html">
										<img src="assets/images/flags/1x1/in.svg" alt="Google Dashboards" />
									</a>
									<a href="index.html">
										<img src="assets/images/flags/1x1/gb.svg" alt="AI Admin Dashboards" />
									</a>
									<a href="index.html">
										<img src="assets/images/flags/1x1/tr.svg" alt="Modern Dashboards" />
									</a>
									<a href="index.html">
										<img src="assets/images/flags/1x1/ca.svg" alt="Best Admin Dashboards" />
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
								<span class="user-name d-none d-md-block">Abigale Heaney</span>
								<span class="avatar">
									<img src="assets/images/user.png" alt="Admin Templates">
									<span class="status online"></span>
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
								<div class="header-profile-actions">
									<a href="profile.html">Profile</a>
									<a href="account-settings.html">Settings</a>
									<a href="login.html">Logout</a>
								</div>
							</div>
						</li>
					</ul>
					<!-- Header actions end -->

				</div>
				<!-- Header actions ccontainer end -->

			</div>
			<!-- Page header ends -->

			<!-- Content wrapper scroll start -->
			<div class="content-wrapper-scroll">

				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<!-- <div class="row">
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Input Field</label>
											<input type="text" class="form-control" placeholder="Enter text">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Disabled Input Field</label>
											<input type="text" class="form-control" value="Disabled Field" disabled="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Readonly Input Field</label>
											<input type="text" class="form-control" value="Readonly Field" readonly="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Password Input Field</label>
											<input type="password" class="form-control" value="12345">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Selcet Field</label>
											<select class="form-select" aria-label="Default select example">
												<option selected="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Disabled Selcet</label>
											<select class="form-select" aria-label="Default select example" disabled="">
												<option>Open this select menu</option>
												<option selected="" value="1">Disabled</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="m-0">
											<label class="form-label">Textarea</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<span class="input-group-text">@</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Name">
											<span class="input-group-text">@test.com</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<span class="input-group-text">$</span>
											<input type="text" class="form-control">
											<span class="input-group-text">.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<span class="input-group-text">$</span>
											<span class="input-group-text">0.00</span>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control">
											<span class="input-group-text">$</span>
											<span class="input-group-text">0.00</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Username">
											<span class="input-group-text">@</span>
											<input type="text" class="form-control" placeholder="Server">
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<span class="input-group-text">Textarea</span>
											<textarea class="form-control" aria-label="With textarea"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button class="btn btn-light" type="button">Button</button>
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<button class="btn btn-light" type="button">Button</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button class="btn btn-light" type="button">Button</button>
											<input type="text" class="form-control" placeholder="">
											<button class="btn btn-light" type="button">Button</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Dropdown</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
											<input type="text" class="form-control" aria-label="Text input with dropdown button">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" aria-label="Text input with dropdown button">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Dropdown</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Dropdown</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action before</a></li>
												<li><a class="dropdown-item" href="#">Another action before</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
											<input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
											<button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
												aria-expanded="false">Dropdown</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<button type="button" class="btn btn-light">Action</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
												data-bs-toggle="dropdown" aria-expanded="false">
												<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
											<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-12">
								<div class="card">
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
											<button type="button" class="btn btn-light">Action</button>
											<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
												data-bs-toggle="dropdown" aria-expanded="false">
												<span class="visually-hidden">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="#">Separated link</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					<!-- Row end -->
					<style>
						.content-wrapper {
							position: relative;

						}

						table {
							width: 60vw;
							background-color: aliceblue;

						}

						.table-modal {
							position: relative;
						}

						.modal-them {
							width: 100vw;
							height: 100vh;
							height: auto;
							position: fixed;
							top: 0;
							left: 0;
							right: 0;
							bottom: 0;
							background-color: rgba(0, 0, 0, 0.6);
							z-index: 1000;
							display: flex;
							justify-content: center;
							align-items: center;
							display: none;

						}

						.card-body>table,
						th,
						td {
							border: 1px solid black;
							border-width: 1px;

						}

						td>button {
							margin-left: 2px;
							background-color: greenyellow;
							border-radius: 10%;

						}

						.modal-them>table>tbody {
							border: none;
						}

						.modal-them>table>tbody>tr {
							border: none;
						}

						.modal-them>table>tbody>tr>td {
							border: none;
						}

						.bi {

							position: absolute;
							right: 0;
							top: 0;

						}
					</style>

					<!-- *************************************************************************************************************************************************************************************************************************************** -->
					<!-- <div class="row chungalo123" style="width: 100%; max-width: 100%;margin-left: 10px;">
							<table>

								<tr>
									<th>mã thành viên</th>
									<th>Tên thành viên </th>
									<th>số điện thoại </th>
									<th>email</th>
									<th>địa chỉ</th>
									<th>
										giới tính
									</th>
									
								
								</tr>
								<tr>
									<td>mã thành viên</td>
									<td>tên thành viên</td>
									<td>số điện tdoại</td>
									<td>email</td>
									<td>địa chỉ</td>
									<td>
										nam
									</td>
									
									<td>
										<button>xóa</button>
									</td>
									<td>
										<button>thêm</button>
									</td>
									<td>
										<button>sửa</button>
									</td>
								</tr>
								<tr>
									<td>mã thành viên</td>
									<td>tên thành viên</td>
									<td>số điện tdoại</td>
									<td>email</td>
									<td>địa chỉ</td>
									<td>
										nam
									</td>
									<td>
										<button>xóa</button>
									</td>
									<td>
										<button>thêm</button>
									</td>
									<td>
										<button>sửa</button>
									</td>
									<tr>
										<td>mã tdành viên</td>
										<td>tên thành viên</td>
										<td>số điện tdoại</td>
										<td>email</td>
										<td>địa chỉ</td>
										<td>
											nam
										</td>
										<td>
											<button>xóa</button>
										</td>
										<td>
											<button>thêm</button>
										</td>
										<td>
											<button>sửa</button>
										</td>
									</tr>
								</tr>
							</table>
						 </div> -->
					<!-- scrip -->
					<?php

					include('../../Model/xuatdulieu.php');
					$obj = new database();

					$thanhvien = $obj->danhsachthanhvien();

					// xử lý
					// thêm
					if (isset($_POST["btThem"])) {
						$TenTV1 = $_POST["TenTV1"];
						$SoDTTV1 = $_POST["SoDTTV1"];
						$EmailTV1 = $_POST["EmailTV1"];
						$DiaChiTV1 = $_POST["DiaChiTV1"];
						$GioiTinh1 = $_POST["GioiTinh1"];
						$sql = "insert into thanhvien(TenTV,SoDTTV,EmailTV,DiaChiTV,GioiTinh) values ('$TenTV1','$SoDTTV1','$EmailTV1','$DiaChiTV1','$GioiTinh1')";
						if ($obj->themsanpham($sql))
							echo "<script>alert('Them thanh cong');window.location.href = 'form-inputs.php';</script>";
						else
							echo "Them that bai";
					}
					// xóa
					if (isset($_POST["btXoa"])) {
						$MaTV = $_POST["btXoa"];
						if ($obj->xoathanhvien($MaTV))
							echo "<script>alert('Xoa thanh cong');window.location.href = 'form-inputs.php';</script>";
						else
							echo "xoa that bai";
					}
					if (isset($_POST["btSua"])) {

						$MaTV = $_POST["MaTV"];
						$TenTV = $_POST["TenTV"];
						$SoDTTV = $_POST["SoDTTV"];
						$EmailTV = $_POST["EmailTV"];
						$DiaChiTV = $_POST["DiaChiTV"];
						$GioiTinh = $_POST["GioiTinh"];
						$sql = "update thanhvien set TenTV='$TenTV',SoDTTV='$SoDTTV',EmailTV='$EmailTV',DiaChiTV='$DiaChiTV',GioiTinh='$GioiTinh' where MaTV=$MaTV";
						if ($obj->suathanhvien($sql)) {
							echo "<script>alert('Sua thanh cong');window.location.href = 'form-inputs.php';</script>";
						} else
							echo "Sua that bai";
					}






					?>
					<div class="card-body">
						<div class="table-responsive">
							<form method="post">
								<table class="table m-0">
									<thead>
										<button type="button" style="margin: 10px;" class="btn btn-success" onclick="on()">thêm thành viên</button>
										<tr>
											<th>Mã Thành Viên</th>
											<th>Tên Thành Viên</th>
											<th>Số Điện Thoại</th>
											<th>Email</th>
											<th>Địa Chỉ</th>
											<th>Giới Tính </th>
											<th>xóa</th>
											<th>sửa</th>
										</tr>
									</thead>
									<tbody>
										
										<?php foreach ($thanhvien as $item): ?>
											<tr>
												<td><?= $item["MaTV"] ?></td>
												<td><?= $item["TenTV"] ?></td>
												<td><?= $item["SoDTTV"] ?></td>
												<td><?= $item["EmailTV"] ?></td>
												<td><?= $item["DiaChiTV"] ?></td>
												<td><?= $item["GioiTinh"] ?></td>
												<td>
													<button
														onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')"
														type="submit" name="btXoa" value="<?= $item["MaTV"] ?>"
														class="btn btn-danger">Xóa</button>

												</td>

												<td>
													<button type="button" class="btn btn-warning" data-toggle="modal"
														data-target="#editCategoryModal"
														onclick="document.getElementById('editMaTV').value='<?= $item['MaTV'] ?>'; 
                                                              document.getElementById('editTenTV').value='<?= $item['TenTV'] ?>'; 
                                                              document.getElementById('editSoDTTV').value='<?= $item['SoDTTV'] ?>';
															  document.getElementById('editEmailTV').value='<?= $item['EmailTV'] ?>';
															  document.getElementById('editDiaChiTV').value='<?= $item['DiaChiTV'] ?>';
															  document.getElementById('editGioiTinh').value='<?= $item['GioiTinh'] ?>';">
														Sửa
													</button>
												</td>

											<?php endforeach; ?>


									</tbody>
								</table>
							</form>
						</div>
					</div>

					<!-- Modal Sửa Danh Mục -->
					<div id="editCategoryModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<form method="POST" id="editCategoryForm">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title text-center">SỬA THÀNH VIÊN</h3>
										<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<input type="hidden" name="MaTV" id="editMaTV">
										<div class="mb-3">
											<label for="editTenTV" class="form-label">Tên Thành viên</label>
											<input type="text" class="form-control" name="TenTV" id="editTenTV" required>
										</div>
										<div class="mb-3">
											<label for="editSoDTTV" class="form-label">SDT</label>
											<textarea class="form-control" name="SoDTTV" id="editSoDTTV"></textarea>
										</div>
										<div class="mb-3">
											<label for="editEmailTV" class="form-label">Email</label>
											<textarea class="form-control" name="EmailTV" id="editEmailTV"></textarea>
										</div>
										<div class="mb-3">
											<label for="editDiaChiTV" class="form-label">Địa chỉ</label>
											<textarea class="form-control" name="DiaChiTV" id="editDiaChiTV"></textarea>
										</div>
										<div class="mb-3">
											<label for="editGioiTinh" class="form-label">Giới tính</label>
											<textarea class="form-control" name="GioiTinh" id="editGioiTinh"></textarea>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
										<button type="submit" name="btSua" class="btn btn-primary">Cập Nhật</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>














				<!-- modal -->
				<div class="modal-them" id="modal-them">
					<form method="post" enctype="multipart/form-data">
						<table class="table-modal">

							<tbody>
								<td class="bi bi-x" onclick="off()"></td>
								<tr>
									<td>tên thành viên</td>
									<td><input name="TenTV1" type="text"></td>
								</tr>
								<tr>
									<td>số điện thoại</td>
									<td><input name="SoDTTV1" type="text"></td>
								</tr>
								<tr>
									<td>email</td>
									<td><input name="EmailTV1" type="text"></td>
								</tr>
								<tr>
									<td>địa chỉ</td>
									<td><input name="DiaChiTV1" type="text"></td>
								</tr>
								<tr>
									<td>giới tính</td>
									<td><input name="GioiTinh1" type="text"></td>
								</tr>
								<td><input type="submit" name="btThem" value="thêm"></td>
							</tbody>
						</table>
					</form>
				</div>
				<form method="post" enctype="multipart/form-data">
					<div class="modal-them" id="modal-sua">
						<table class="table-modal">
							<?php

							$thanhviensua = $obj->xuat1thanhvien($idSua);
							?>
							<tbody>
								<td class="bi bi-x" onclick="off1()"></td>

								<tr>
									<td>tên thành viên</td>
									<td><input name="TenTV" type="text" value="<?= $idSua ?>"></td>
								</tr>
								<tr>
									<td>số điện thoại</td>
									<td><input name="SoDTTV" type="text" value="<?= $thanhviensua[0]['SoDTTV'] ?>"></td>
								</tr>
								<tr>
									<td>email</td>
									<td><input name="EmailTV" type="text" value="<?= $thanhviensua[0]['EmailTV'] ?>"></td>
								</tr>
								<tr>
									<td>địa chỉ</td>
									<td><input name="DiaChiTV" type="text" value="<?= $thanhviensua[0]['DiaChiTV'] ?>"></td>
								</tr>
								<tr>
									<td>giới tính</td>
									<td><input name="GioiTinh" type="text" value="<?= $thanhviensua[0]['GioiTinh'] ?>"></td>
								</tr>
								<td><button type="submit" name="btSua">Sửa</button></td>
							</tbody>
						</table>
					</div>
				</form>
			</div>
			<!-- Content wrapper end -->

			<!-- App Footer start -->
			<div class="app-footer">
				<span>© Arise admin 2023</span>
			</div>
			<!-- App footer end -->

		</div>
		<!-- Content wrapper scroll end -->

	</div>
	<!-- *************
				************ Main container end *************
			************* -->

	</div>
	</form>
	<!-- Page wrapper end -->

	<!-- *************
			************ Required JavaScript Files *************
		************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/moment.js"></script>

	<!-- *************
			************ Vendor Js Files *************
		************* -->

	<!-- Overlay Scroll JS -->
	<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
	<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

	<!-- Main Js Required -->
	<script src="assets/js/main.js"></script>
	<script>
		function off() {
			document.getElementById("modal-them").style.display = "none";
		}

		function on() {
			document.getElementById("modal-them").style.display = "flex";
		}

		function off1() {
			document.getElementById("modal-sua").style.display = "none";
		}

		function on1() {
			document.getElementById("modal-sua").style.display = "flex";
		}
	</script>

</body>

</html>