@extends('layouts.app')

<!-- @section('title', 'Dashboard') -->

@section('content')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <form action="{{ route('mahasiswa.store') }}" method="POST">
  @csrf
  <section class="content">
          <!-- left column -->
          <div class="card">
            <!-- Horizontal Form -->
            <div class="card-body">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nim" id="nim" placeholder="Ketikan NIM">
                      @error('nim')
                      <span class="badge badge-danger"><small>{{ $message }}</small></span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketikan Nama Mahasiswa">
                      @error('nama')
                      <span class="badge badge-danger"><small>{{ $message }}</small></span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Ketikan Tanggal Lahir Mahasiswa">
                      @error('tanggal_lahir')
                      <span class="badge badge-danger"><small>{{ $message }}</small></span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Ketikan Alamat Mahasiswa">
                      @error('alamat')
                      <span class="badge badge-danger"><small>{{ $message }}</small></span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <a href="{{ url('mahasiswa') }}">
                    <button type="button" class="btn btn-default float-right">Cancel</button>
                  </a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
    </section>
    <!-- /.content -->

  </form>
  
</div>
</body>
    @endsection