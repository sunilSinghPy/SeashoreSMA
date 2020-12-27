@extends('admin.layout')
@section('head')
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
{{-- {{dd($students)}} --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title badge badge-info">Click on Roll No. to view student details.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Form filled</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)
                  <tr>
                        <td>{{$student->id}}
                        <td ><button class="btn btn-primary btl-lg">
                            {{$student->roll_no}}
                        </button>
                        </td>
                        <td ><span class="badge badge-success">{{$student->name}}</span></td>
                        <td >{{$student->uname}}</td>
                        <td ><span class="badge badge-info">
                            {{$student->form_filled==1 ?Carbon\Carbon::parse($student->updated_at)->diffForHumans():'NO'}}
                             </span>
                        </td>
                  </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Form filled</th>
                  </tr>
                  </tfoot>
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

@endsection
