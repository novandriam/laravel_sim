@extends('admin.home')
@section('title', 'Edit Kategori')

@section('content')

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="row" style="padding-left:2em;">
<h2 class="page-header">Edit Kategori Aset</h2>
	<div class="col-xs-10">
		<form action="{{ url('kelola/kategori_aset/edit') }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $kategori->id }}">
		      <div class="form-group">
		        <label>Nama Kategori</label>
		        <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control col-xs-6">
		      </div>
		      <br><br>
		    <input name="submit" type="submit" class="btn btn-success">
		</form>
	</div>
</div>
@endsection 