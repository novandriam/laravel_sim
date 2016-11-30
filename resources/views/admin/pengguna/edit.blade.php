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
		<form action="{{ url('kelola/pengguna/edit') }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $user->id }}" > 
		      <div class="form-group">
		        <label>Nama</label>
		        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
		      </div>

		      <div class="form-group">
		        <label>Email</label>
		        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
		      </div>
		      <div class="form-group">
		        <label>Password</label>
		        <input type="password" name="password" value="" class="form-control">
		        <span class="help-block">Kosongkan password, jika tidak diganti</span>
      		  </div>
      		  <div class="form-group">
		        <label>Tipe</label>
		        <select name="level" class="form-control">
		          <option value="{{ $user->level }}">{{ $user->level }}</option>
		          @if($user->level == 'member')
		          	<option value="admin">Admin</option>
		          @else
		          	<option value="member">Member</option>
		          @endif		          		          
		        </select>
		      </div>    
		    <input name="submit" type="submit" class="btn btn-success">
		</form>
	</div>
</div>
@endsection 