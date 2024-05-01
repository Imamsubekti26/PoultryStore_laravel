@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-primary" onclick="href('car/tambah')">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="table-data">
          <thead>
            <tr>
              <th>Nomor Plat</th>
              <th>Merk</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0"></tbody>
        </table>
      </div>
    </div>
@endsection