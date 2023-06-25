@extends('template.app')
@section('title', 'Berita')
@section('content')
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Manage Data Berita</h6>
        <button class="btn btn-sm btn-success my-2" type="button" id="berita">Buat Berita</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Post By</th>
                <th>Kategori</th>
                <th>Tgl Publish</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection