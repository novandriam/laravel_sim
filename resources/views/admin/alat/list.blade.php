@extends('admin.home')
@section('title', 'Alat')

@section('content')
  <h2 class="page-header">Alat 
  <a href="{{ url('kelola/alat/add') }}" class="btn btn-danger pull-right">+</a>
  </h2>
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-hover table-bordered" id="datatable">
        <thead class="thead-default">
          <th>No</th>
          <th>Nama</th>
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
        ajax: '{{ url("kelola/alat/getdata") }}',
        columns: [
            { data: 'rownum', name: 'rownum', searchable: false },
            { data: 'nama', name: 'nama' },
            { data: 'action', name: 'action' }
        ]
    });  
  </script>
  @endpush
@endsection