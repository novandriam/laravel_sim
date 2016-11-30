@extends('admin.home')
@section('title', 'Kelola Pengguna')

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

<div class="row">
	<div class="col-xs-12">
		<form action="{{ url('kelola/pengguna/add') }}" method="post">
			{{ csrf_field() }}
		      <div class="form-group">
		        <label>Nama</label>
		        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
		      </div>

		      <div class="form-group">
		        <label>Email</label>
		        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
		      </div>
		      <div class="form-group">
		        <label>Password</label>
		        <input type="password" name="password" value="{{ old('password') }}" class="form-control">
      		  </div>
      		  <div class="form-group">
		        <label>Tipe</label>
		        <select name="level" class="form-control">
		          <option value="admin">Admin</option>
		          <option value="member">Member</option>
		        </select>
		      </div>    
		    <input name="submit" type="submit" class="btn btn-success">
		</form>
	</div>
</div>
@endsection 