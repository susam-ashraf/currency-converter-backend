@extends('layouts.admin.app')

@section('title','Report')

@push('css')
      <!-- DataTables -->
<link rel="stylesheet" href="{{asset('/admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Currency</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Currency</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Total Report</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>From Currency</th>
                    <th>To Currency</th>
                    <th>Amount</th>
                    <th>Converted</th>
                    <th>Converted In USD</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
    </section>



@endsection

@push('js')
<!-- DataTables -->
<script src="{{asset('/admin/')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('/admin/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "serverSide": true,
        "processing": true,
         ajax: '{{route('currency.data')}}',
          columns: [
            { data: 'id' },
            { data: 'from' },
            { data: 'to' },
            { data: 'amount' },
            { data: 'converted' },
            { data: 'converted_to_usd' },
         ]
      });
    });
  </script>



@endpush
