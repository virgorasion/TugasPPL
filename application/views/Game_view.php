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
								<a href="#" class="nav-link gold"><?=$gold?></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link level"><?="Level ".$level?></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link btn btn-success text-white btn_upgrade" data-toggle="tooltip" title="<?="level ".(20*(2**($level-1)))?>">Upgrade</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link STR"><?="STR ".$str?></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link HP"><?="HP ".$hp?></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link DEF"><?="DEF ".$def?></a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link MP"><?="MP ".$mana?></a>
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

										<ul class="users-list clearfix data_item" style="margin-bottom:0px">
											
										</ul>
									</div>
								</div>

								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="card-title m-0">Skill</h5>
									</div>
									<div class="card-body">

										<ul class="users-list clearfix data_skill" style="margin-bottom:0px">
											
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
			var gold_user = parseInt(<?= $gold ?>);
			var level = parseInt(<?= $level ?>);
			var inc_gold = 1*(2**(level-1));
			var hp = parseInt(<?= $hp ?>);
			var mana = parseInt(<?= $mana ?>);
			var str = parseInt(<?= $str ?>);
			var tidur = parseInt(<?= $tidur ?>);
			var def = parseInt(<?= $def ?>);

			function turnamen() {
				setTimeout(() => {
					let url = "<?= site_url("Game/insertAttribut") ?>"
					$.post(url,{
						id:id_user,
						gold:gold_user,
						level:level,
						hp:hp,
						mana:mana,
						str:str,
						tidur:tidur,
						def:def
					});
					window.location = "<?= site_url("Game/turnamen") ?>"
				}, 120000);
			}
			turnamen();

			setInterval(() => {
				gold_user += inc_gold;
				$(".gold").text(gold_user)
				console.log(inc_gold)
			}, 1000);

			// Update Data User Ke Database
			setInterval(() => {
				let url = "<?= site_url("Game/insertAttribut") ?>"
				$.post(url,{
					id:id_user,
					gold:gold_user,
					level:level,
					hp:hp,
					mana:mana,
					str:str,
					tidur:tidur,
					def:def
				})
				$(".STR").text("STR "+str)
				$(".HP").text("HP "+hp)
				$(".DEF").text("DEF "+def)
				$(".MP").text("MP "+mana)
			}, 1000);

			// Data Ajax Perlengkapan
			function reloadItem(){
				let image = "<?=base_url('assets/dist/img/user1-128x128.jpg')?>"
				$.ajax({
					url:"<?=site_url("Game/getStoreItem")?>",
					type:"POST",
					success: function(result){
						var data = JSON.parse(result)
						var html = ""
						$.each(data,function(i){
							html += `<li class="equip" style="width:120px;cursor:pointer;padding:0px"data-type="equip" data-level="`+data[i].level+`" data-nama="`+data[i].nama_item+`" data-harga="`+data[i].harga+`" data-id="`+data[i].id+`" data-hp="`+data[i].inc_hp*2**(data[i].level)+`" data-mp="`+data[i].inc_mana*2**(data[i].level)+`" data-def="`+data[i].inc_def*2**(data[i].level)+`" data-str="`+data[i].inc_str*2**(data[i].level)+`" data-toggle="tooltip" title="HP = +`+data[i].inc_hp*2**(data[i].level)+` | MP = +`+data[i].inc_mana*2**(data[i].level)+` | DEF = +`+data[i].inc_def*2**(data[i].level)+` | STR = +`+data[i].inc_str*2**(data[i].level)+`">
										<img src="`+image+`" width="70" height="70" alt="Ini Gambar Tamagoci">
										<span class="users-list-name text-xs">`+data[i].nama_item+`</span>
										<span class="users-list-date">`+data[i].harga*2**(data[i].level)+`</span>
									</li>`
							$(".data_item").html(html)
						})
					}
				})
			}
			function reloadSkill(){
				let image = "<?=base_url('assets/dist/img/user1-128x128.jpg')?>"
				$.ajax({
					url:"<?=site_url("Game/getStoreSkill")?>",
					type:"POST",
					success: function(result){
						var data = JSON.parse(result)
						var html = ""
						$.each(data,function(i){
							html += `<li class="skill" style="width:120px;cursor:pointer;padding:0px" data-type="skill" data-level="`+data[i].level+`" data-nama="`+data[i].nama_skill+`" data-harga="`+data[i].harga+`" data-id="`+data[i].id+`" data-dmg="`+data[i].dmg+`" data-cd="`+data[i].cooldown+`" data-mp_use="`+data[i].mana_usage+`" data-toggle="tooltip" title="DMG = +`+data[i].dmg*2**(data[i].level)+` | CD = `+data[i].cooldown+` Sec | MP USAGE= +`+data[i].dmg*2**(data[i].level)+`">
										<img src="`+image+`" width="70" height="70" alt="User Image">
										<span class="users-list-name text-xs">`+data[i].nama_skill+`</span>
										<span class="users-list-date">`+data[i].harga*2**(data[i].level)+`</span>
									</li>`
							$(".data_skill").html(html)
						})
					}
				})
			}
			reloadSkill()
			reloadItem()

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
			function sendMsg(){
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
			}
			$("#sendMsg").click(function() {
				sendMsg()
			})
			$("#msg").keypress(function(e){
				if (e.which == 13) {
					sendMsg()
				}
			})

			// Notification Setelah Membeli Item
			$(".test").click(function() {
				if (gold_user >= 300) {
					gold_user -= 300;
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
			function insert_to_database(id_item,type,level){
				let url = "<?=site_url('Game/buy')?>"
				$.post(url,{
					type:type,
					level:level,
					id_user:id_user,
					id_item:id_item
				})
			}

			$(".btn_upgrade").click(function(){
				upgrade_level()
			})

			$(".food,.equip,.skill").tooltip("enable")
			$(document).on("click",".food,.equip,.skill",function(){
				let type = $(this).data('type')
				let harga_item = parseInt($(this).data('harga'))
				let id_item = $(this).data('id')
				console.log(id_item)
				let level = parseInt($(this).data('level')) + 1
				if (gold_user > harga_item) {
					gold_user -= harga_item
					if (type == "food") {
						let nama_item = $(this).data('nama')
						hp += parseInt($(this).data('hp'))
						mana += parseInt($(this).data('mp'))
						notifChat(nama+" Telah Membeli Makanan "+nama_item)
					}else if (type == "equip"){
						let nama_item = $(this).data('nama')
						hp += parseInt($(this).data('hp'))
						mana += parseInt($(this).data('mp'))
						def += parseInt($(this).data('def'))
						str += parseInt($(this).data('str'))
						insert_to_database(id_item,type,level)
						notifChat(nama+" Telah Membeli Perlengkapan "+nama_item)
						reloadItem()
					}else if(type == "skill") {
						let nama_item = $(this).data('nama')
						insert_to_database(id_item,type,level)
						notifChat(nama+" Telah Mempelajari Skill "+nama_item)
						reloadSkill()
					}
				}
			})
			function upgrade_level(){
				let harga = 20*(2**(level-1))
				if (gold_user >= harga) {
					gold_user -= harga
					harga = 20*(2**(level))
					level += 1
					inc_gold = 1*(2**(level-1))
					$(".btn_upgrade").removeAttr("title")
					$(".btn_upgrade").attr("title",harga)
					$(".level").text("Level "+level)
				}else{
					let text = "Gold Yang Kamu Miliki Belum Cukup";
					notification(text)
				}
			}
			function notification(text){
				$(document).Toasts('create', {
					title: 'Informasi !',
					class: 'bg-info',
					autohide: true,
					delay: 1500,
					body: text
				})
			}
		})
	</script>

	</html>