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
        <table class="table table-striped">
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
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Mengantar Pakan 10 sak</td>
              <td>27/04/24</td>
              <td>Pak Hendri</td>
              <td>Lendah, Kulon Progo</td>
              <td><a href="#" class="badge bg-label-primary me-1">trip 270424.01</a></td>
              <td>
                <a href="#" class="badge text-black">
                  <i class="bx bx-edit-alt me-1"></i>
                  Edit
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection