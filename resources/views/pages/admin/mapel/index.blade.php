@extends('adminlte::page')

@section('title', 'Mata Pelajaran')
@section('content_header')
    {{-- <a class="btn btn-primary button-footer" title="Tambah Data" href="{{route('users.create')}}"><i class="fas fa-plus fa-2x"></i></a> --}}
@stop

@section('content')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        {{-- <div class="col-sm-6">
          <h3>Data User</h3>
        </div><!-- /.col --> --}}
      </div><!-- /.row -->
    </div>
</div>

  {{-- alert error --}}
  @if ($errors->any())
  <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
      </ul>
  </div>
  @endif

  {{-- alert success --}}
  @if (session('success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i> 
        {{session('success')}}
    </div>
  @endif

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="float-left">Data User</h3>
            <a class="btn btn-success shadow-sm float-right" title="Tambah Data" href="{{route('mapel.create')}}">Create User</a>
        </div>
        <div class="card-body">
         <div class="table-responsive">
             <table class="table table-hover table-bordered" id="mapel">
                 <thead>
                     <tr>
                         <th>Kode</th>
                         <th>Mapel</th>
                         <th>action</th>
                     </tr>
                     <tr>
                         <th></th>
                         <th><input type="text" data-column="1" class="input-filter dt-searcher form-control" placeholder="Search ..." style="width: 400px"></th>
                         <th></th>
                     </tr>
                 </thead>
                 <tbody>
                 </tbody>
             </table>
            </div>
        </div>
     </div>
     @include('pages.admin.partials.modal-delete')
</div>
@stop

@section('css')
<style>
    .button-footer{
        width: 60px;
        height: 60px;
        z-index: 3;
        position: fixed;  
        right: 30px;
        bottom:30px;
        border-radius: 50% !important
    }
</style>
@stop

@section('js')
    <script>
        $(function(){
           let table = $('#mapel').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{url('/admin/mapel/datatable')}}",
                    "dataType" :"json",
                    "type":"POST",
                    "data":{_token: "{{csrf_token()}}"},
                },
                columns: [
                    {data: 'kode', name: 'kode'},
                    {data: 'nama', name: 'nama', orderable:false},
                    {data: 'actions', name: 'actions', searchable:false}
                ]
            });
            table.order([ 0, 'desc' ]).draw();

            $('.input-filter').change(function(){
                table.column($(this).data('column'))
                .search($(this).val())
                .draw();
            });
        });

        $('#modalDelete').on('show.bs.modal',function(e){
            var mapelid = $(e.relatedTarget).data('mapelid');
            $('#formDeleteModal').attr('action','/admin/mapel/'+mapelid);
        });

        setTimeout(() => {
            $('.alert').fadeOut();
        }, 3000);
    </script>
@stop

@section('plugins.Datatables', true)