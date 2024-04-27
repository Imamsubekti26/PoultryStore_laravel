@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">pilih tanggal:</span>
              <input type="date" class="form-control">
            </div>
            <button class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Rincian Pekerjaan</th>
              <th>Tanggal</th>
              <th>Tujuan</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Mengantar Pakan 10 sak</td>
              <td>27/04/24</td>
              <td>Lendah, Kulon Progo</td>
              <td><span class="badge bg-label-primary me-1">On Deliver</span></td>
              <td>
                <i class="bx bx-edit-alt me-1"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection