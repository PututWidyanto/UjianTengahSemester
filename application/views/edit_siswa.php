<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UTS FRAMEWORK</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Putut Widyanto</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url('kelas') ?>">Kelas</a></li>
										<li><a href="<?php echo site_url('siswa/create') ?>">Tambah Siswa</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open_multipart('siswa/update/'.$this->uri->segment(3).'/'.$this->uri->segment(4)); ?>
								<legend>Edit Data Siswa</legend>
								<?php echo validation_errors(); ?>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" value="<?php echo $kelas[0]->nama ?>">
								</div>
                                <div class="form-group">
									<label for="">NIM</label>
									<input type="text" class="form-control" id="id" name="id" placeholder="NIM Siswa" value="<?php echo $kelas[0]->id ?>">
								</div>
                                <div class="form-group">
									<label for="">Tanggal Beli</label>
									<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $kelas[0]->tanggal_lahir ?>">
								</div>
                                <div class="form-group">
									<label for="">Foto</label>
									<input type="file" class="form-control" id="foto" name="foto" size="20" value="<?php echo $kelas[0]->foto ?>">
								</div>
                                <div class="form-group">
									<label for="">Kelas</label>
									<select id="fk_kelas" name="fk_kelas" class="form-control">
										<?php foreach($data_kelas as $key){ ?>
										<option value="<?php echo $key->id?>" <?php if($kelas[0]->fk_kelas == $key->id){echo 'selected';} ?> ><?php echo $key->nama ?></option>
										<?php } ?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>