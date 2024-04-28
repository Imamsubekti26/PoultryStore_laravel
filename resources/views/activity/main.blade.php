@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            <div class="input-group">
              <span class="input-group-text">tanggal:</span>
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
              <th width="40%">Rincian Pekerjaan</th>
              <th width="10%">Tanggal</th>
              <th width="25%">Tujuan</th>
              <th width="15%">Status</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Mengantar Pakan 10 sak</td>
              <td>27/04/24</td>
              <td>Lendah, Kulon Progo</td>
              <td><span class="badge bg-label-primary me-1">trip 270424.01</span></td>
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