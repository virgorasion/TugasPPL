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
	<link rel="stylesheet" href="<?=site_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=site_url('assets/dist/css/adminlte.min.css')?>">
</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="../../index3.html" class="navbar-brand">
					<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
						style="opacity: .8">
					<span class="brand-text font-weight-light">AdminLTE 3</span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
					aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">
					<!-- Left navbar links -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="#" class="nav-link">Gold</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link gold">0</a>
						</li>
						<li class="nav-item dropdown">
							<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
								class="nav-link dropdown-toggle">Dropdown</a>
							<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
								<li><a href="#" class="dropdown-item">Some action </a></li>
								<li><a href="#" class="dropdown-item">Some other action</a></li>

								<li class="dropdown-divider"></li>

								<!-- Level two dropdown-->
								<li class="dropdown-submenu dropdown-hover">
									<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
									<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
										<li>
											<a tabindex="-1" href="#" class="dropdown-item">level 2</a>
										</li>

										<!-- Level three dropdown-->
										<li class="dropdown-submenu">
											<a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
											<ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
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
							<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
					<li class="nav-item">
						<a class="nav-link btn btn-danger" data-widget="control-sidebar" data-slide="true" href="<?=site_url("Main/out")?>" role="button">
							Keluar
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /.navbar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">

			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">

							<!-- DIRECT CHAT -->
							<div class="card direct-chat-primary">
								<div class="card-header">
									<h3 class="card-title">Direct Chat</h3>

									<div class="card-tools">
										<!-- <span title="3 New Messages" class="badge badge-warning">3</span> -->
										<button type="button" class="btn btn-tool" data-card-widget="collapse">
											<i class="fas fa-minus"></i>
										</button>
										<button type="button" class="btn btn-tool" data-card-widget="remove">
											<i class="fas fa-times"></i>
										</button>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<!-- Conversations are loaded here -->
									<div class="direct-chat-messages" id="chat_content">

										<!-- Message. Default to the left -->
										<div class="direct-chat-msg">
											<div class="direct-chat-infos clearfix">
												<span class="direct-chat-name float-left">Alexander Pierce</span>
												<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
											</div>
											<!-- /.direct-chat-infos -->
											<div class="direct-chat-text">
												Is this template really for free? That's unbelievable!
											</div>
											<!-- /.direct-chat-text -->
										</div>
										<!-- /.direct-chat-msg -->

										<!-- Message to the right -->
										<div class="direct-chat-msg right">
											<div class="direct-chat-infos clearfix">
												<span class="direct-chat-name float-right">Sarah Bullock</span>
												<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
											</div>
											<!-- /.direct-chat-infos -->
											<div class="direct-chat-text">
												You better believe it!
											</div>
											<!-- /.direct-chat-text -->
										</div>
										<!-- /.direct-chat-msg -->

									</div>
									<!--/.direct-chat-messages-->
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<div class="input-group">
										<input id="msg" type="text" name="message" placeholder="Type Message ..." class="form-control">
										<span class="input-group-append">
											<button id="sendMsg" type="button" class="btn btn-success">Send</button>
										</span>
									</div>
								</div>
								<!-- /.card-footer-->
							</div>
							<!--/.direct-chat -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-lg-8">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title m-0">Featured</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title">Special title treatment</h6>

									<p class="card-text">With supporting text below as a natural lead-in to additional
										content.</p>
									<a href="#" class="btn btn-primary test">Go somewhere</a>
								</div>
							</div>

							<div class="card card-primary card-outline">
								<div class="card-header">
									<h5 class="card-title m-0">Featured</h5>
								</div>
								<div class="card-body">
									<h6 class="card-title">Special title treatment</h6>

									<p class="card-text">With supporting text below as a natural lead-in to additional
										content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

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
	<script src="<?=site_url('assets/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=site_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=site_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>

<script>
	$(document).ready(function(){
		var url = "<?=site_url('Game/chat/'.$_SESSION['id_room'])?>"
		var kode_ruang = "<?=$_SESSION['kode_ruang']?>"
		var id_user = "<?=$_SESSION['id_user']?>"
		var id_room = "<?=$_SESSION['id_room']?>"
		var nama = "<?=$_SESSION['nama']?>"

		// Variable Game
		var gold = <?=$gold?>;
		var level = <?=$level?>;
		var hp = <?=$hp?>;
		var mana = <?=$mana?>;
		var str = <?=$str?>;
		var tidur = <?=$tidur?>;
		var def = <?=$def?>;

		setInterval(() => {
			gold += level * 2
			$(".gold").text(gold)
		}, 1000);

		setInterval(() => {
			let url = "<?=site_url("Game/insertAttribut")?>"
			$.post(url,{
				id:id_user,
				gold:gold,
				level:level,
				hp:hp,
				mana:mana,
				str:str,
				tidur:tidur,
				def:def
			})
		}, 5000);

		// Reload Chat Interval setiap 1 detik
		setInterval(() => {
			let msgBox = document.querySelector("#chat_content")
			$.ajax({
				url: url,
				type: "POST",
				success:function(result){
					var data = JSON.parse(result)
					var html = ""
					$.each(data, function(i){
						html += `<div class="direct-chat-msg `+((data[i].id_user == id_user)?"right":"")+`">
												<div class="direct-chat-infos clearfix">
													<span class="direct-chat-name `+((data[i].id_user == id_user)?"float-right":"float-left")+`">`+data[i].nama+`</span>
													<span class="direct-chat-timestamp `+((data[i].id_user == id_user)?"float-left":"float-right")+`">`+data[i].timestamp+`</span>
												</div>
												<div class="direct-chat-text">
													`+data[i].chat+`
												</div>
											</div>`
						$("#chat_content").html(html)
					})
				}
			})
			msgBox.scrollTop = msgBox.scrollHeight
		}, 1000);

		// Fungsi Chat
		$("#sendMsg").click(function(){
			let pesan = $("#msg").val();
			let url = "<?=site_url('Game/sendChat')?>";
			let msgBox = document.querySelector("#chat_content")
			$.post(url,
			{
				id_user: id_user,
				id_room: id_room,
				chat: pesan,
				public: 1
			})
			$("#msg").val("")
			msgBox.scrollTop = msgBox.scrollHeight
		})

		// Notification Setelah Membeli Item
		$(".test").click(function(){
			if (gold >= 300) {
				gold -= 300;
				let msg = nama+" Telah Mempelajari Skill Fire Ball"
				notifChat(msg)
			}
		})

		// Fungsi Untuk Push Notification
		function notifChat(notif){
			let url = "<?=site_url('Game/sendChat')?>";
			let chat = notif
			let msgBox = document.querySelector("#chat_content")
			$.post(url,{
				id_user: id_user,
				id_room: id_room,
				chat: chat,
				public: 1
			})
			msgBox.scrollTop = msgBox.scrollHeight
		}
	})
</script>

</html>
