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
            <h1>Edit Data UKM</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <form action="{{ route('ukm.update',['ukm' => $data->id]) }}" method="POST">
  @csrf
  @method('PUT')
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
                    <label for="nama" class="col-sm-2 col-form-label">Nama UKM</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" id="nama" placeholder="Ketikan Nama UKM">
                      @error('nama')
                      <span class="badge badge-danger"><small>{{ $message }}</small></span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi UKM</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" value="{{ $data->deskripsi }}" id="deskripsi" placeholder="Ketikan Deskripsi UKM">
                      @error('deskripsi')
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
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
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