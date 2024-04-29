@extends('layout.main')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <h5>Daftar {{ $title }}</h5>
          <div class="d-flex gap-3 align-items-center">
            {{-- <button class="btn btn-primary" onclick="href('salary/tambah')">Tambah</button> --}}
          </div>
        </div>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Bulan</th>
              <th>Upah</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Pak Bee</td>
              <td>Maret 2024</td>
              <td>2.000.000</td>
              <td>
                <a href="#" class="badge bg-label-success me-1">Lunas</a>
              </td>
              <td>
                <a href="#" class="text-black">
                  <i class="bx bx-edit-alt me-1"></i>
                  Tambah Bonus/Pinalty
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection