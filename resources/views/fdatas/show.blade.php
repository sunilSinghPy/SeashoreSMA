@extends('admin.layout')

@section('head')
<style>
    dt{

        color:rgb(252, 116, 5);

        font-size:medium;
        font-weight: bold;

    }
</style>
@endsection
@section('content')
{{dd($fdata->student())}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form-Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('fdatas.index')}}">forms-list</a></li>
                        <li class="breadcrumb-item active">form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row fluid justify-content-center">
            <div class="col-sm-12">
                <div class="card mr-md-5 ml-md-5" >
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-file"></i>
                      {{$fdata->first_name}}'s-Form-Details
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <dl class="row">
                      <dt class="col-sm-4">ID :</dt>
                      <dd class="col-sm-8">{{$fdata->id}}</dd>
                      <dt class="col-sm-4">Roll No. :</dt>
                      <dd class="col-sm-8">{{$fdata->roll_no}}</dd>

                      <dt class="col-sm-4">First Name :</dt>
                      <dd class="col-sm-8">{{$fdata->first_name}}</dd>
                      <dt class="col-sm-4">Last Name :</dt>
                      <dd class="col-sm-8">{{$fdata->last_name}}</dd>
                      <dt class="col-sm-4">Email :</dt>
                      <dd class="col-sm-8">{{$fdata->email}}</dd>
                      <dt class="col-sm-4">Date Of Birth :</dt>
                      <dd class="col-sm-8">{{$fdata->dob}}</dd>
                      <dt class="col-sm-4">Post (Applied For) :</dt>
                      <dd class="col-sm-8">{{$fdata->post}}</dd>
                      <dt class="col-sm-4">Gender :</dt>
                      <dd class="col-sm-8">{{$fdata->gender}}</dd>
                      <dt class="col-sm-4">Student Mobile :</dt>
                      <dd class="col-sm-8">{{$fdata->mobile}}</dd>
                      <dt class="col-sm-4">Father's Name :</dt>
                      <dd class="col-sm-8">{{$fdata->fathers_name}}</dd>
                      <dt class="col-sm-4">Father's Mobile</dt>
                      <dd class="col-sm-8">{{$fdata->f_mobile}}</dd>
                      <dt class="col-sm-4">Father's Occupation</dt>
                      <dd class="col-sm-8">{{$fdata->fathers_occupation}}</dd>
                      <dt class="col-sm-4">Address :</dt>
                      <dd class="col-sm-8">{{$fdata->address}}</dd>
                      <dt class="col-sm-4">Country :</dt>
                      <dd class="col-sm-8">India</dd>
                      <dt class="col-sm-4">State :</dt>
                      <dd class="col-sm-8">{{$fdata->state}}</dd>
                      <dt class="col-sm-4">City :</dt>
                      <dd class="col-sm-8">{{$fdata->city}}</dd>
                      <dt class="col-sm-4">Pincode :</dt>
                      <dd class="col-sm-8">{{$fdata->pincode}}</dd>
                      <dt class="col-sm-4">About Myself :</dt>
                      <dd class="col-sm-8">{{$fdata->about_us}}</dd>
                      <dt class="col-sm-4">What is Merchent Navy :</dt>
                      <dd class="col-sm-8">{{$fdata->what_mn}}</dd>
                      <dt class="col-sm-4">Why Merchent Navy :</dt>
                      <dd class="col-sm-8">{{$fdata->why_mn}}</dd>
                      <dt class="col-sm-4">Relative In Merchent Navy :</dt>
                      <dd class="col-sm-8">{{$fdata->rel_mn}}</dd>
                      <dt class="col-sm-4">Student ID :</dt>
                      <dd class="col-sm-8">{{$fdata->student()->name}}</dd>
                    </dl>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
