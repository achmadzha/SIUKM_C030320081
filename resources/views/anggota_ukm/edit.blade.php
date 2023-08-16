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
            <h1>Daftar Anggota UKM</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <form action="{{ route('anggota_ukm.update',['anggota_ukm' => $data->id]) }}" method="POST">
  @csrf
  @method ('PUT')
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
                    <label for="id_mahasiswa" class="col-sm-2 col-form-label">Pilih Mahasiswa</label>
                    <div class="col-sm-10">
                      <select name="id_mahasiswa" value="{{ $data->nim }}" id="id_mahasiswa" class="form-control @error('id_mahasiswa') is-invalid @enderror">
                      @foreach ($mahasiswa as $item)
                      <option value="{{ $item->id }}" {{ $item->nim == $data->nim ? 'selected' : '' }}> ({{ $item->nim }}) - {{ $item->nama }}</option> 
                         @endforeach
                      </select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="id_ukm" class="col-sm-2 col-form-label">Pilih UKM</label>
                    <div class="col-sm-10">
                      <select name="id_ukm" id="id_ukm" class="form-control @error('id_ukm') is-invalid @enderror">
                         @foreach ($ukm as $item)
                      <option value="{{ $item->id }}" {{ $item->nama == $data->nama ? 'selected' : '' }}> {{ $item->nama }}</option> 
                         @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <a href="{{ url('anggota_ukm') }}">
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