@extends("admin.home")
@section("title", "Selamat datang")
@section("content")
<div class="jumbotron">
  <h4>Selamat datang di sistem informasi manajemen aset SMP Muhammadiyah 1 Kartasura</h4>
  <p></p>
  <p><a class="btn btn-sm btn-primary btn-lg" href="#" role="button">Lihat Daftar Aset</a></p>
</div>
<h3 class="page-header">Daftar Aset</h3>
<table class="table table-bordered table-hover">
  <thead>
  	<th align="center">No</th>
  	<th align="center">Nama</th>
  	<th align="center">Jenis</th>
  	<th align="center">Jumlah</th>
  	<th align="center">Detail</th>
  </thead>
  <tbody>
  	@for($i=1;$i<5;$i++)
  	<tr>
  		<td align="center">{{ $i }}</td>
  		<td align="center">Aset ke-{{ $i }}</td>
  		<td align="center">Jenis ke {{ $i }}</td>
  		<td align="center">{{ $i*2 }}</td>
  		<td align="center"><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
  	</tr>
  	@endfor
  </tbody>
</table>
@endsection