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
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="<?= site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= site_url('assets/dist/css/adminlte.min.css') ?>">
	</head>

	<body class="hold-transition layout-top-nav">
		<div class="wrapper">

			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
				<div class="container">
					<a href="../../index3.html" class="navbar-brand">
						<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
						<span class="brand-text font-weight-light">AdminLTE 3</span>
					</a>

					<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
							<li class="nav-item">
								<a href="#" class="nav-link level">Level 1</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link btn btn-success text-white btn_upgrade" data-toggle="tooltip" title="<?=$level*16?>">Upgrade</a>
							</li>
						</ul>

					<!-- Right navbar links -->
					<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
						<li class="nav-item">
							<a class="nav-link btn btn-danger text-white" data-widget="control-sidebar" data-slide="true" href="<?= site_url("Main/out") ?>" role="button">
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
										<div class="direct-chat-messages text-xs" id="chat_content">

											<!-- Content Chat Ajax -->

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
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="card-title m-0">Makanan</h5>
									</div>
									<div class="card-body">

										<ul class="users-list clearfix" style="margin-bottom:0px">
											<?php foreach($food_item as $food): ?>
											<li class="food" style="width:120px;cursor:pointer;padding:0px" data-type="food" data-id="<?=$food->id?>" data-hp="<?=$food->inc_hp?>" data-mp="<?=$food->inc_mana?>" data-harga="<?=$food->harga?>" data-nama="<?=$food->nama_food?>" data-toggle="tooltip" title="<?="HP = +".$food->inc_hp." | "."MP = +".$food->inc_mana?>">
												<img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70" alt="User Image">
												<span class="users-list-name text-xs"><?=$food->nama_food?></span>
												<span class="users-list-date"><?=$food->harga?></span>
											</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>

								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="card-title m-0">Perlengkapan</h5>
									</div>
									<div class="card-body">

										<ul class="users-list clearfix" style="margin-bottom:0px">
											<?php foreach($item_item as $item): ?>
											<li class="equip" style="width:120px;cursor:pointer;padding:0px"data-type="equip" data-nama="<?=$item->nama_item?>" data-harga="<?=$item->harga?>" data-id="<?=$item->id?>" data-hp="<?=$item->inc_hp?>" data-mp="<?=$item->inc_mana?>" data-def="<?=$item->inc_def?>" data-str="<?=$item->inc_str?>" data-toggle="tooltip" title="<?="HP = +".$item->inc_hp." | "."MP = +".$item->inc_mana." | "."DEF = +".$item->inc_def." | "."STR = +".$item->inc_str?>">
												<img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70" alt="User Image">
												<span class="users-list-name text-xs"><?=$item->nama_item?></span>
												<span class="users-list-date"><?=$item->harga?></span>
											</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>

								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="card-title m-0">Skill</h5>
									</div>
									<div class="card-body">

										<ul class="users-list clearfix" style="margin-bottom:0px">
											<?php foreach($skill_item as $skill): ?>
											<li class="skill" style="width:120px;cursor:pointer;padding:0px" data-type="skill" data-nama="<?=$skill->nama_skill?>" data-harga="<?=$skill->harga?>" data-id="<?=$skill->id?>" data-str="<?=$skill->str?>" data-cd="<?=$skill->cooldown?>" data-mp_use="<?=$skill->mana_usage?>" data-toggle="tooltip" title="<?="STR = +".$skill->str." | "."CD = ".$skill->cooldown." Sec | "."MP USAGE= +".$skill->mana_usage?>">
												<img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70" alt="User Image">
												<span class="users-list-name text-xs"><?=$skill->nama_skill?></span>
												<span class="users-list-date"><?=$skill->harga?></span>
											</li>
											<?php endforeach ?>
										</ul>
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
		<script src="<?= site_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= site_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?= site_url('assets/dist/js/adminlte.min.js') ?>"></script>
	</body>
	<?=$_SESSION['nama']?>
	<?=$_SESSION['id_room']?>
	<?=$_SESSION['id_user']?>
	<?=$_SESSION['kode_ruang']?>

	<script>
		$(document).ready(function() {
			var url = "<?= site_url('Game/chat/' . $_SESSION['id_room']) ?>"
			var kode_ruang = "<?= $_SESSION['kode_ruang'] ?>"
			var id_user = "<?= $_SESSION['id_user'] ?>"
			var id_room = "<?= $_SESSION['id_room'] ?>"
			var nama = "<?= $_SESSION['nama'] ?>"

			// Variable Game
			var gold = parseInt(<?= $gold ?>);
			var gold_rank = 1
			var level = parseInt(<?= $level ?>);
			var hp = parseInt(<?= $hp ?>);
			var mana = parseInt(<?= $mana ?>);
			var str = parseInt(<?= $str ?>);
			var tidur = parseInt(<?= $tidur ?>);
			var def = parseInt(<?= $def ?>);

			setInterval(() => {
				if (level == 1) {
					gold += 1
				}else{
					gold += gold_rank * 2
				}
				$(".gold").text(gold)
			}, 1000);

			// Update Data User Ke Database
			setInterval(() => {
				let url = "<?= site_url("Game/insertAttribut") ?>"
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

			// setInterval(() => {
			// 	let url = "<?= site_url("Game/insertAttribut") ?>"
			// 	$.post(url,{
			// 		id:id_user,
			// 		gold:gold,
			// 		level:level,
			// 		hp:hp,
			// 		mana:mana,
			// 		str:str,
			// 		tidur:tidur,
			// 		def:def
			// 	})
			// 	window.location = "<?= site_url("Game/turnamen") ?>"
			// }, 300000);

			// Reload Chat Interval setiap 1 detik
			setInterval(() => {
				let msgBox = document.querySelector("#chat_content")
				$.ajax({
					url: url,
					type: "POST",
					success: function(result) {
						var data = JSON.parse(result)
						var html = ""
						$.each(data, function(i) {
							html += `<div class="direct-chat-msg ` + ((data[i].id_user == id_user) ? "right" : "") + `">
												<div class="direct-chat-infos clearfix">
													<span class="direct-chat-name ` + ((data[i].id_user == id_user) ? "float-right" : "float-left") + `">` + data[i].nama + `</span>
													<span class="direct-chat-timestamp ` + ((data[i].id_user == id_user) ? "float-left" : "float-right") + `">` + data[i].timestamp + `</span>
												</div>
												<div class="direct-chat-text">
													` + data[i].chat + `
												</div>
											</div>`
							$("#chat_content").html(html)
						})
					}
				})
				// msgBox.scrollTop = msgBox.scrollHeight
			}, 1000);

			// Fungsi Chat
			$("#sendMsg").click(function() {
				let pesan = $("#msg").val();
				let url = "<?= site_url('Game/sendChat') ?>";
				let msgBox = document.querySelector("#chat_content")
				$.post(url, {
					id_user: id_user,
					id_room: id_room,
					chat: pesan,
					public: 1
				})
				$("#msg").val("")
				msgBox.scrollTop = msgBox.scrollHeight
			})

			// Notification Setelah Membeli Item
			$(".test").click(function() {
				if (gold >= 300) {
					gold -= 300;
					let msg = nama + " Telah Mempelajari Skill Fire Ball"
					notifChat(msg)
				}
			})

			// Fungsi Untuk Push Notification
			function notifChat(notif) {
				let url = "<?= site_url('Game/sendChat') ?>";
				let chat = notif
				let msgBox = document.querySelector("#chat_content")
				$.post(url, {
					id_user: id_user,
					id_room: id_room,
					chat: chat,
					public: 1
				})
				msgBox.scrollTop = msgBox.scrollHeight
			}

			// Function Insert Database Saat Beli Item
			function insert_to_database(id_item){
				let url = "<?=site_url('Game/buy')?>"
				$.post(url,{
					id_user:id_user,
					id_item:id_item
				})
			}

			$(".btn_upgrade").click(function(){
				let harga = level * 25
				if (gold > harga) {
					gold -= harga
					level += 1
				}
			})

			$(".food,.equip,.skill").tooltip("enable")
			$(".food,.equip,.skill").click(function(){
				let $type = $(this).data['type']
				let harga_item = parseInt($(this).data['harga'])
				let id_item = $(this).data('id')
				if (gold > harga_item) {
					gold -= harga_item
					if ($type == "food") {
						let nama_item = $(this).data('nama')
						hp += parseInt($(this).data['hp'])
						mp += parseInt($(this).data['mp'])
						insert_to_database(id_item)
						notifChat(nama+" Telah Membeli Makanan "+nama_item)
					}else if ($type == "equip"){
						let nama_item = $(this).data('nama')
						hp += parseInt($(this).data['hp'])
						mp += parseInt($(this).data['mp'])
						def += parseInt($(this).data['def'])
						str += parseInt($(this).data['str'])
						insert_to_database(id_item)
						notifChat(nama+" Telah Membeli Perlengkapan "+nama_item)
					}else if($type == "skill") {
						let nama_item = $(this).data('nama')
						insert_to_database(id_item)
						notifChat(nama+" Telah Mempelajari Skill "+nama_item)
					}
				}
			})
		})
	</script>

	</html>