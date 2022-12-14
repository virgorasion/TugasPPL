<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Top Navigation</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css')?>">
</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="../../index3.html" class="navbar-brand">
					<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
						class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">AdminLTE 3</span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse"
					data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">
					<!-- Left navbar links -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="index3.html" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
							<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
								<li><a href="#" class="dropdown-item">Some action </a></li>
								<li><a href="#" class="dropdown-item">Some other action</a></li>

								<li class="dropdown-divider"></li>

								<!-- Level two dropdown-->
								<li class="dropdown-submenu dropdown-hover">
									<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false"
										class="dropdown-item dropdown-toggle">Hover for action</a>
									<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
										<li>
											<a tabindex="-1" href="#" class="dropdown-item">level 2</a>
										</li>

										<!-- Level three dropdown-->
										<li class="dropdown-submenu">
											<a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false"
												class="dropdown-item dropdown-toggle">level 2</a>
											<ul aria-labelledby="dropdownSubMenu3"
												class="dropdown-menu border-0 shadow">
												<li><a href="#" class="dropdown-item">3rd level</a></li>
												<li><a href="#" class="dropdown-item">3rd level</a></li>
											</ul>
										</li>
										<!-- End Level three -->

										<li><a href="#" class="dropdown-item">level 2</a></li>
										<li><a href="#" class="dropdown-item">level 2</a></li>
									</ul>
								</li>
								<!-- End Level two -->
							</ul>
						</li>
					</ul>

					<!-- SEARCH FORM -->
					<form class="form-inline ml-0 ml-md-3">
						<div class="input-group input-group-sm">
							<input class="form-control form-control-navbar" type="search" placeholder="Search"
								aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-navbar" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>

				<!-- Right navbar links -->
				<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
					<!-- Messages Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
							<i class="fas fa-comments"></i>
							<span class="badge badge-danger navbar-badge">3</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
										class="img-size-50 mr-3 img-circle">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											Brad Diesel
											<span class="float-right text-sm text-danger"><i
													class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">Call me whenever you can...</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
										class="img-size-50 img-circle mr-3">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											John Pierce
											<span class="float-right text-sm text-muted"><i
													class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">I got your message bro</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
										class="img-size-50 img-circle mr-3">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											Nora Silvester
											<span class="float-right text-sm text-warning"><i
													class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">The subject goes here</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
						</div>
					</li>
					<!-- Notifications Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
							<i class="far fa-bell"></i>
							<span class="badge badge-warning navbar-badge">15</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<span class="dropdown-header">15 Notifications</span>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-envelope mr-2"></i> 4 new messages
								<span class="float-right text-muted text-sm">3 mins</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-users mr-2"></i> 8 friend requests
								<span class="float-right text-muted text-sm">12 hours</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-file mr-2"></i> 3 new reports
								<span class="float-right text-muted text-sm">2 days</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
							<i class="fas fa-th-large"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /.navbar -->

		<div class="content-wrapper" style="min-height: 2646.71px;">

			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Turnamen</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Contacts</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="content">

				<div class="card card-solid">
					<div class="card-body pb-0">
						<div class="row data_user">

						</div>
					</div>
				</div>

			</section>

		</div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
				Anything you want
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>
<script>
    $(function() {
        var url = "<?=site_url('Turnamen/dataUserTurnamen/'.$_SESSION['kode_ruang'])?>"
        var id_user = parseInt("<?=$_SESSION['id_user']?>")
              $.ajax({
              url:url,
              type:'POST',
              success: function(result){
                  var data = JSON.parse(result)
				  allData = data
				//   console.log(allData)
                  var html = ''
				  var img = "<?=base_url('assets/p1.png')?>"
				  var user = data.length
                  $.each(data,function(i){
                      html += `<div class="col-12 col-sm-3 col-md-3 d-flex align-items-stretch flex-column">
								<div class="card bg-light d-flex flex-fill">
									<div class="card-header text-muted border-bottom-0">
										Pemain `+parseInt(i+1)+`
									</div>
									<div class="card-body pt-0">
										<div class="row">
											<div class="col-7">
												<h2 class="lead"><b>`+data[i].nama+`</b></h2>
												<ul class="ml-4 mb-0 fa-ul text-muted">
													<li class="small"><span class="fa-li"><i
																class="fas fa-lg fa-building"></i></span> HP: `+data[i].hp+`</li>
													<li class="small"><span class="fa-li"><i
																class="fas fa-lg fa-building"></i></span> MP: `+data[i].mana+`</li>
													<li class="small"><span class="fa-li"><i
																class="fas fa-lg fa-building"></i></span> STR: `+data[i].str+`</li>
													<li class="small"><span class="fa-li"><i
																class="fas fa-lg fa-building"></i></span> DEF: `+data[i].def+`</li>
													<li class="small"><span class="fa-li"><i
																class="fas fa-lg fa-building"></i></span> Lvl: `+data[i].level+`</li>
												</ul>
											</div>
											<div class="col-5 text-center">
												<img src="`+img+`" alt="user-avatar"
													class="img-circle img-fluid imgply`+i+`">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="text-right">
											<a href="#" class="btnWin`+i+` btn btn-sm btn-danger">
												<i class="fas fa-user"></i> Lose
											</a>
										</div>
									</div>
								</div>
							</div>`
                          $(".data_user").html(html)
                      }) //each
                  } //success
              }) //ajax
		$(document).ready(function(){
			$.ajax({
				url: url,
				type: 'POST',
				success:function(result){
					let data = JSON.parse(result)
					let winner = []
					$.each(data, function(i){
						let p1 = 0
						let p2 = 0
						let index = 0
							if (i % 2 == 0) {
								let text = `Duel `+data[i].nama+` VS `+data[i+1].nama+``
								$(".imgply"+i).attr("title",text);
								$(".imgply"+i).tooltip("show");
								p1 = ((data[i].hp/1000)+(data[i].mana/1000)+(data[i].str/10)+(data[i].def/10))/4
								p2 = ((data[i+1].hp/1000)+(data[i+1].mana/1000)+(data[i+1].str/10)+(data[i+1].def/10))/4
								index = i+1
							} else{
								let text = `Duel `+data[i].nama+` VS `+data[i-1].nama+``
								$(".imgply"+i).attr("title",text);
								$(".imgply"+i).tooltip("show");
								p1 = ((data[i].hp/1000)+(data[i].mana/1000)+(data[i].str/10)+(data[i].def/10))/4
								p2 = ((data[i-1].hp/1000)+(data[i-1].mana/1000)+(data[i-1].str/10)+(data[i-1].def/10))/4
								index = i-1
							}
						setTimeout(() => {
							if (p1 < p2) {
								$(".btnWin"+index).removeClass("btn-danger")
								$(".btnWin"+index).addClass("btn-success")
								$(".btnWin"+index).text("Win")
								winner.push(p2)
							} else{
								$(".btnWin"+i).removeClass("btn-danger")
								$(".btnWin"+i).addClass("btn-success")
								$(".btnWin"+i).text("Win")
								winner.push(p1)
							}
						},3000)
						
					})
				}
			})

			function notification(text){
				$(document).Toasts('create', {
					title: 'Informasi !',
					class: 'bg-info',
					autohide: true,
					delay: 5000,
					body: text
				})
			}
		})
    })
</script>
</html>