<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="<?php echo base_url('DashboardAdmin'); ?>" ><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('Admin/pegawai'); ?>" class=""><i class="lnr lnr-users"></i> <span>Atur Dokter</span></a></li>
				<li><a class="active" href="<?php echo base_url('User/index'); ?>" class=""><i class="lnr lnr-user"></i> <span>Atur Akun</span></a></li>
				<li><a href="<?php echo base_url('Layanan/index'); ?>" class=""><i class="lnr lnr-book"></i> <span>Atur Layanan</span></a></li>
				<li><a href="<?php echo base_url('Jamkes/index'); ?>" class=""><i class="lnr lnr-plus-circle"></i> <span>Atur Jaminan Kesehatan</span></a></li> 
				<li><a href="<?php echo base_url('Jadwal/index'); ?>" class=""><i class="lnr lnr-clock"></i> <span>Atur Jadwal</span></a></li>
				<li><a href="<?php echo base_url('Antrian/index'); ?>" class=""><i class="lnr lnr-eye"></i> <span>Lihat Antrian</span></a></li>
				<li><a ref="<?php echo base_url('Hubungi/index'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Kotak Masuk</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Pegawai</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('User/updateUser'); ?>" method="POST">
								<input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
								<div class="col-md-6">
									<?php 
									if($list){
										foreach ($list as $value) {
											?>
											<div class="form-group">
												<label for="username">Username</label>
												<input id="username" name="username" type="text" class="form-control" placeholder="Username" value="<?php echo $value['username']; ?>" required="">
											</div>

											<div class="form-group">
												<label for="nama">Nama</label>
												<input id="nama" name="nama" type="text" class="form-control" value="<?php echo $value['nama']; ?>" placeholder="Nama" required="">
											</div>

											<div class="form-group">
												<label for="akses">Hak Akses</label>
												<select name="akses" class="form-control">
													<option value="<?php echo $value['akses']; ?>">Admin</option>
													<option value="Admin">Admin</option>
													<option value="Pengurus">Pengurus</option>
													<option value="Pegawai">Pegawai</option>
													<option value="User">User</option>
												</select>
											</div>
									</div>
											<?php
										}
									}
									?>
									<div class="col-md-12">
										<input class="btn btn-primary btn-lg" type="submit" value="Update">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
