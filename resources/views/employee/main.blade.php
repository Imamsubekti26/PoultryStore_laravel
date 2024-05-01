@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">filter:</span>
              <select id="filter" class="form-select">
                <option value="1">Semua</option>
                <option value="1">Nganggur</option>
                <option value="2">Tidak di Kantor</option>
                <option value="3">Sibuk/Trip</option>
              </select>
            </div>
            <button class="btn btn-primary" onclick="href('employee/tambah')">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="table-data">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Status</th>
              <th>Telp</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0"></tbody>
        </table>
      </div>
    </div>
@endsection