@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">tanggal:</span>
              <input type="date" id="filter" name="date" class="form-control" value="{{ $today['date'] }}">
            </div>
            <button class="btn btn-primary" onclick="href('activity/tambah')">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="table-data">
          <thead>
            <tr>
              <th width="30%">Rincian Pekerjaan</th>
              <th width="10%">Tanggal</th>
              <th width="15%">Tujuan</th>
              <th width="20%">Area</th>
              <th width="15%">Status</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0"></tbody>
        </table>
      </div>
    </div>
@endsection