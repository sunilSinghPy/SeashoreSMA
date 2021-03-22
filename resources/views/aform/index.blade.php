@extends('admin.layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    {{-- {{ dd($students) }} --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        @if (session()->has('msg'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Action Successfull!</strong> {{ session()->get('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title badge badge-info">Click on Roll No. to view student details.</h3>
                                <h3 class="shadow btn bg-gradient-teal elevation-5 float-sm-right">
                                    <a href="{{ url('admin/fdatasToCsv') }}" class="px-20 text-white ">Download</a>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Roll No.</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Mobile</th>
                                            <th>city</th>
                                            <th><i class="fa fa-clock"></i></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aforms as $aform)
                                            <tr>
                                                <td>{{ $aform->id }}
                                                <td><button class="shadow btn btn-danger bg-gradient-info btl-lg">
                                                        <a href="{{ route('fdatas.show', ['id' => $aform->id]) }}"
                                                            class="text-white">
                                                            {{ $aform->rollNo }}
                                                        </a>
                                                    </button>
                                                </td>
                                                <td><span class=" text-dark">
                                                        {{ $aform->name }}
                                                    </span></td>
                                                <td>{{ $aform->fatherName }}</td>
                                                <td>{{ $aform->mobile }}</td>
                                                <td>{{ $aform->distt }}</td>
                                                <td><span class="text-white shadow badge badge-warning">
                                                        {{ Carbon\Carbon::parse($aform->created_at)->diffForHumans() }}
                                                    </span>
                                                </td>
                                                <td>

                                                    <a href="{{ url('fdatas/' . $aform->id . '/edit') }}"><i
                                                            class="fa fa-edit text-pink float-sm-left"></i></a>
                                                    <form action="{{ route('fdatas.destroy', $aform->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn float-sm-right" type="submit" style=""><i
                                                                class="fa fa-trash text-danger float-sm-right"></i></button>
                                                    </form>

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
                                            <th>Mobile</th>
                                            <th>city</th>
                                            <th><i class="fa fa-clock right"></i></th>
                                            <th>Action</th>
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
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "order": [
                    [0, 'desc']
                ],
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
