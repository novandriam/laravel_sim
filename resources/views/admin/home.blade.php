<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title") - SIMASET MUTU</title>
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/datatable/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/css/customnavbar.css') }}">

	<script type="text/javascript" src="{{ url('assets/js/jquery-1.12.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/datatable/jquery.dataTables.min.js') }}"></script>
	<style>
		body{
			margin-top: 80px;
			
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span>&nbsp; SIMASET SMP MUHAMMADIYAH 1 KARTASURA</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="col-md-3" style="border-right:#ccc 1px solid">
			<div class="list-group">
			 <a href="#" class="list-group-item">Home</a>
			  <a href="#" class="list-group-item active">
			    Manajemen Alat
			  </a>
			  <a href="{{ url('kelola/alat') }}" class="list-group-item">Daftar semua alat</a>
			  <a href="#" class="list-group-item">Pindah alat</a>
			  <a href="#" class="list-group-item">Buang alat</a>
			  <a href="#" class="list-group-item">Lepas alat</a>
			  <a href="#" class="list-group-item active">
			    Manajemen Aset
			  </a>
			  <a href="{{ url('kelola/aset') }}" class="list-group-item">Daftar semua aset</a>
			  <a href="#" class="list-group-item">Pindah aset</a>
			  <a href="#" class="list-group-item">Buang aset</a>
			  <a href="#" class="list-group-item">Lepas aset</a>
			  <a href="{{ url('kelola/kategori_aset') }}" class="list-group-item">Kategori aset</a>
			   <a href="#" class="list-group-item active">
			    Manajemen User
			  </a>
			  <a href="{{ url('kelola/pengguna') }}" class="list-group-item">Semua user</a>
			  <a href="#" class="list-group-item">Transaksi</a>
			  <a href="#" class="list-group-item active">
			    Laporan
			  </a>
			  <a href="#" class="list-group-item">Lihat laporan</a>
			</div>
		</div>
		<div class="col-md-9">
			@if(Session::get('peringatan') != null)
			<div class="alert alert-info">{{ Session::get('peringatan') }}</div><br>
			@endif
				@yield("content")
		</div>

	</div>

	@stack('jscode')
</body>
</html>