@extends('admin.home')
@section('title', 'Kelola Pengguna')

@section('content')
  <h2 class="page-header">Pengguna 
  <a href="{{ url('kelola/pengguna/add') }}" class="btn btn-danger pull-right">+</a>
  </h2>
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-hover table-bordered" id="datatable">
        <thead class="thead-default">
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Status</th>
          <th>Opsi</th>
        </thead>
      </table>
    </div><!--/span-->
  </div><!--/row-->

  @push('jscode')
  <script>
    // Datatable View
    var datatable =
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url("kelola/pengguna/getdata") }}',
        columns: [
            { data: 'rownum', name: 'rownum', searchable: false },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'level', name: 'level' },
            { data: 'action', name: 'action' }
        ]
    });  
  </script>
  @endpush
@endsection