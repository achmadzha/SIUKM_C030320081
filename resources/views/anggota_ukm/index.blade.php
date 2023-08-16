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
            <h1>Data Pendaftaran Anggota</h1>
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
              <a href="{{ url('anggota_ukm/create') }}" class="btn btn-primary" style="margin-bottom:15px">
                Daftar Anggota UKM
              </a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>UKM</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $au)
                      <tr>
                        <td>
                          @if ($au->mahasiswa)
                            {{ $au->mahasiswa->nim }}
                          @endif
                        </td>
                        <td>
                          @if ($au->mahasiswa)
                            {{ $au->mahasiswa->nama }}
                          @endif
                        </td>
                        <td>
                          @if ($au->ukm)
                            {{ $au->ukm->nama }}
                          @endif
                        </td>
                        <td>
                        <a href="{{ route('anggota_ukm.edit',['anggota_ukm' => $au->id]) }}"> <i class="fas fa-pencil-alt"></i></a>
                          <a data-toggle="modal" data-target="#modal-hapus{{ $au->id }}"> <i  class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <div class="modal fade" id="modal-hapus{{ $au->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content bg-danger">
                            <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Anda yakin ingin menghapus Data Pendaftaran dengan NIM <b>{{ $au->nim }}</b></p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <form action="{{ route('anggota_ukm.destroy',['anggota_ukm' => $au->id]) }}" method="POST">
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