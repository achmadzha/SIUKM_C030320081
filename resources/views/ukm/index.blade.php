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
            <h1>Data Unit Kegiatan Mahasiswa</h1>
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
              <!-- /.card-header -->
              <div class="card-body">
              <a href="{{ url('ukm/create') }}" class="btn btn-primary" style="margin-bottom:15px">
                Tambah UKM
              </a>
              <!-- <a href="{{ url('cetakUKM') }}" class="btn btn-primary" style="margin-bottom:15px">
                Cetak UKM
              </a> -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $ukm)
                      <tr>
                        <td>{{ $ukm->id }}</td>
                        <td>{{ $ukm->nama }}</td>
                        <td>{{ $ukm->deskripsi }}</td>
                        <td>
                        <a href="{{ route('ukm.edit',['ukm' => $ukm->id]) }}"> <i class="fas fa-pencil-alt"></i></a>
                          <a data-toggle="modal" data-target="#modal-hapus{{ $ukm->id }}"> <i  class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus{{ $ukm->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content bg-danger">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Anda yakin ingin menghapus UKM <b>{{ $ukm->nama }}</b></p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('ukm.destroy',['ukm' => $ukm->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-light">Ya</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    @endforeach
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
  <!-- /.content-wrapper -->
</div>
</body>
    @endsection